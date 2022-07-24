<?php 
session_start();
require_once "../login/Cl/DBclass.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <select name="plan_contrato_filter" id="plan_contrato_filter" class="form-control">
                <option value="">Filtrar por Tipo de Plan</option>
                <option value="0">Plan Gratuito</option>
                <option value="1">Plan Litte</option>
                <option value="2">Plan Basico</option>
                <option value="3">Plan Premium</option>
            </select>
        </div>
        <div class="col-md-4" >
            <select name="tipo_usuario_filter" id="tipo_usuario_filter" class="form-control">
                <option value="">Filtrar por Tipo de Usuario</option>
                <option value="0">Profesionistas</option>
                <option value="1">Empresas/Contratantes</option>
            </select>
        </div>
        <div class="col-md-4" id="div_carrera_profesionista" name="div_carrera_profesionista">
            <select id="carrera_profesionista" name="carrera_profesionista" class="form-control">
                <option value="" disabled selected>Selecciona un Area de trabajo</option>
            <?php 
                $sql1 = "SELECT * FROM areas_profesiones";
                $query = mysqli_query($con, $sql1);
                if ($query) {
                    while ($area = mysqli_fetch_array($query)) {
                        ?>
                    <optgroup label="<?php echo $area['nombre_area']; ?>">
                    <?php 
                        $id_area = $area['id_area'];
                        $sql2="SELECT * FROM profesiones WHERE id_area='$id_area'";
                        $query2 = mysqli_query($con, $sql2);
                        while ($profesion = mysqli_fetch_array($query2)){
                        ?>
                        <option value="<?php echo $profesion['id_profesion']; ?>"><?php echo $profesion['nombre_profesion']; ?></option>
                        <?php 
                        }
                    }
                }else{
                    echo "Error";
                }
                ?>
            </select>
        </div>
    </div>
</div>
<br>
<br>
<table class="table table-responsive-lg" id="tabla_documentos" name="tabla_documentos">
    <thead>
        <tr>
            <th>Correo</th>
            <th>Nombre(s)</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Tipo de usuario</th>
            <th>Plan Contratado</th>
        </tr>
    </thead>
    <tbody id="datos" name="datos">
    </tbody>
</table>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla_documentos').DataTable();
        $('#datos').load('../components/datos_revisados.php');
        $('#div_carrera_profesionista').prop('hidden', true);
    });
    function revision_documentos(correo, tipo, plan_contratado){
        if (plan_contratado=="0") {
            $.ajax({
                url: '../php/verificacion_datos_revisados.php',
                type: 'POST',
                data: "correo="+correo+"&tipo="+tipo+"&plan="+plan_contratado,
            })
            .done(function(r) {
                let datos = JSON.parse(r);
                datos.forEach(datos => {
                    $('#correo_pg').val(correo);
                    $('#nombres_pg').val(datos.nombres);
                    $('#apellido_p_pg').val(datos.apellido_p);
                    $('#apellido_m_pg').val(datos.apellido_m);
                    $('#numero_contacto_pg').val(datos.numero_contacto)
                    $('#localidad_pg').val(datos.localidad); 
                    $('#servicio_pg').val(datos.servicio);
                });
            });
            abrir_modal('#modal_plan_gratuito');
        }else if (plan_contratado=="1") {
            abrir_modal('#modal_plan_litte');
        }else if (plan_contratado==2) {
            abrir_modal('#modal_plan_basico');
        }else if (plan_contratado==3) {
            abrir_modal('#modal_plan_premium');
        }
    }
    $('#plan_contrato_filter').change(function() {
        $.ajax({
            url: '../php/sesiones.php',
            type: 'POST',
            data: "funcion=2&plan="+$('#plan_contrato_filter').val()+"&tipo="+$('#tipo_usuario_filter').val()+"&profesion="+$('#carrera_profesionista').val(),
        })
        .done(function(r) {
            if (r=="1") {
                $('#datos').load('../components/datos_revisados.php');
            }else{
                console.log(r);
            }
        })
        .fail(function(r) {
            console.log(r);
        }); 
    });
    $('#tipo_usuario_filter').change(function() {
        if ($('#tipo_usuario_filter').val()=="0") {
            $('#div_carrera_profesionista').prop('hidden', false);
        }else{
            $('#div_carrera_profesionista').prop('hidden', true);
        }
        $.ajax({
            url: '../php/sesiones.php',
            type: 'POST',
            data: "funcion=2&plan="+$('#plan_contrato_filter').val()+"&tipo="+$('#tipo_usuario_filter').val()+"&profesion="+$('#carrera_profesionista').val(),
        })
        .done(function(r) {
            if (r=="1") {
                $('#datos').load('../components/datos_revisados.php');
            }else{
                console.log(r);
            }
        })
        .fail(function(r) {
            console.log(r);
        }); 
    });
</script>