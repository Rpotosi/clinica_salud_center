@extends('adminlte::page')

@section('title', 'ordenes')

@section('content_header')
    <h1>Crear Orden Servicio</h1>
    <br>
    <script>
      function ocultarCampos() {
          var ordenFisica = document.getElementById("orden_fisica");
          var Enfasis = document.getElementById("Examen_enfasis");
          var enfasis = document.getElementById("examen_enfasis");
          var observaciones = document.getElementById("observaciones");
          var Observaciones = document.getElementById("Observaciones");
          var File = document.getElementById("File");
          var file = document.getElementById("file");
           
    
          
          if (ordenFisica.value == "si") {
              enfasis.style.display = "none";
              Enfasis.style.display = "none";
              observaciones.style.display = "none";
              Observaciones.style.display = "none";
              File.style.display = "block";
              file.style.display = "block";
          } else {
              enfasis.style.display = "block";
              Enfasis.style.display = "block";
              observaciones.style.display = "block";
              Observaciones.style.display = "block";
              File.style.display = "none";
              file.style.display = "none";
              

          }
      }


  </script>
@stop

@section('content')



<div class="form">
  <form id="create-form" action="{{ route('orders.create') }}" method="POST" class="row g-3"> <!-- esta linea requiere ruta Route::post('guias/create', 'store')->name(('guias.create'));  definida el routes guia-->
    
    @csrf
    
    <div class="col-md-3">
      <label for="fecha_atencion" class="form-label">
        Fecha de atención
      </label>
      <input type="date" class="form-control" id="fecha_atencion" name="fecha" required/> 
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <label for="tipo_documento" class="form-label">
          Tipo Documento
        </label>
        <br>
        <select id="tipo_documento" class="custom-select" name="tipo_documento" required>
          <option></option>
          <option>Cedula Ciudadania</option>
          <option>Tarjeta Identidad</option>
          <option>Cedula Extranjeria</option>
        </select>
      </div>
      <div class="col-4">
        <label for="cedula" class="form-label">
          Cedula
        </label>
        <input type="text" class="form-control" id="cedula" placeholder="" name="cedula" required/>
      </div>
    <div class="col-md-4">
      <label for="nombres" class="form-label">
        Nombres
      </label>
      <input type="text" class="form-control" id="nombres" name="nombres" required/>
    </div>

    <div class="col-md-4">
      <label for="apellidos" class="form-label">
        Apellidos
      </label>
      <input type="text" class="form-control" id="apellidos" name="apellidos" required/>
    </div>

    <div class="col-4">
      <label for="cargo" class="form-label">
        Cargo
      </label>
      <input type="text" class="form-control" id="cargo" placeholder="" name="cargo" required/>
    </div>

    <div class="col-md-4">
      <label for="tipo_examen" class="form-label">
        Tipo Exámen
      </label>
      <br>
      <select id="tipo_examen" class="custom-select" name="tipo_examen" required>
        <option selected></option>
        <option>Exámen Ingreso</option>
        <option>Exámen Egreso</option>
        <option>Exámen Periódico</option>
        <option>Exámen Post Incapacidad</option>
        <option>Exámen Reubicación Laboral</option>
        <option>Exámen de Seguimiento</option>
        <option>Otros</option>
      </select>
    </div>
    <div class="col-md-4 ">
        <label for="orden_fisica" class="form-label">
          Tiene Orden Fisica?
        </label>
        <br>
        <select id="orden_fisica" class=" custom-select" onchange="ocultarCampos()">
          <option selected></option>
          <option value="no">No</option>
          <option value="si">Sí</option>
      </select>
      </div>

      <div class="form-group col-md-4" >
        <label for="file" id="File">Cargar archivo</label>
        <br>
        <input type="file" id="file" name="file-upload">
      </div>
      

      <div class="col-md-4">
        <label for="examen_enfasis" id="Examen_enfasis" class="form-label">
          Exámen de enfasis
        </label>
        <select id="examen_enfasis" class="custom-select" name="examen_enfasis">
          <option selected></option>
          <option>Exámen 1</option>
          <option>Exámen 2</option>
        </select>
      </div>
      
      <div class="col-4">
        <label for="observaciones" id="Observaciones" class="form-label">
          Observaciones
        </label>
        <textarea type="text" class="form-control" rows="5" id="observaciones" placeholder="" name="observaciones"></textarea>
      </div>
      <div class="col-12">
        <label for=""></label>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary" onclick="confirmSubmit(event)">Guardar</button>
    </div>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.all.min.js"></script>
<script>
  function confirmSubmit(event) {
    // validation empy box of form 
    var form = document.getElementById("create-form");
  if (form.checkValidity()) {
    // validation empy box of form 
  

    $.ajax({
      url: $('#create-form').attr('action'),
      type: 'POST',
      data: $('#create-form').serialize(),
      success: function(response) {
          if (response.success) {
              // Si la guia se ha guardado con éxito, mostramos una alerta con SweetAlert2
              Swal.fire({
                  icon: 'success',
                  title: '¡Orden creada con éxito!',
                  showConfirmButton: false,
                  timer: 1200,
                  width: '25rem', // Define el ancho de la ventana modal
                  height: '1rem',
                  heightAuto: false // Desactiva el ajuste automático de altura
              }).then(function() {
                  location.reload(); // Recargamos la página para mostrar el formulario vacío
              });
          } else {
              // Si ha ocurrido un error al guardar una guia, mostramos una alerta con SweetAlert2
              Swal.fire({
                  icon: 'error',
                  title: '¡Ha ocurrido un error!',
                  text: response.message,
                  showConfirmButton: false,
                  timer: 1200
              });
          }
      }
  });

  // validation empy box of form   
  } else {
    alert("Por favor complete todos los campos requeridos");
  }
  // validation empy box of form  

  event.preventDefault(); // Prevenimos el envío del formulario por defecto
  // Enviamos el formulario mediante AJAX
  
}
</script> <!--aqui diseñamos nuestro formulario orden-->
@stop
