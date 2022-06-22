<table class="table table-bordered table-responsive text-center" id="tabla_documentos" name="tabla_documentos">
    <thead>
        <tr>
            <th scope="col">Identificador</th>
            <th scope="col">Nombre completo</th>
            <th scope="col">Tipo de usuario</th>
            <th scope="col">Correo</th>
            <th scope="col">Estado de documentos</th>
            <th scope="col">Verificar documentos</th>
        </tr>
    </thead>
    <tbody>
        <?php require_once "datos.php"; ?>
    </tbody>
</table>
<script type="text/javascript">
  $(document).ready(function() {
  var table=$('#tabla_carreras').DataTable({
     "order": [[ 0, "asc" ]]
  });
  /*
  $('#tabla_carreras tbody').on('click', 'tr' , function () {
      var data = table.row(this).data();
      $.ajax({
          url: '../../php/administrador/carreras/mostrar_carrera.php',
          type: 'POST',
          data: "id="+data[0],
      })
      .done(function(response) {
        let carrera = JSON.parse(response);
        carrera.forEach(carrera_update => {
            $('#id_carrera').val(carrera_update.id_carrera);
            $('#nom_carrera_update').val(carrera_update.nombre_carrera);
            $('#num_semestres_carrera_update').val(carrera_update.numero_semestres);
            $('#estado_activo_update').val(carrera_update.estado); 
        });
            setTimeout(abrir_modal, 100, '#update_carrera');
            cerrar_modal('#carreras');
      })
      .fail(function(r){
          console.log("Error en la peticion");
      });
    });
    */
});
</script>