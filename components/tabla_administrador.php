<table class="table table-responsive-lg" id="tabla_documentos" name="tabla_documentos">
    <thead>
        <tr>
            <th>Correo</th>
            <th>Nombre(s)</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Tipo de usuario</th>
            <th>Plan Contratado</th>
            <th>Estado de documentos</th>
            <th>Verificar documentos</th>
        </tr>
    </thead>
    <tbody>
        <?php require_once "datos.php"; ?>
    </tbody>
</table>
<script type="text/javascript">
    $(document).ready(function() {
      $('#tabla_documentos').DataTable();
    });
    function revision_documentos(correo, tipo, plan_contratado){
        if (plan_contratado=="0") {
            $.ajax({
                url: '../php/verificacion_datos.php',
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
</script>