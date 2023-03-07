@extends('adminlte::page')

@section('title', 'ordenes')

@section('content_header')
    <h1>Crear Orden Servicio</h1>
    <br>
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
        <input type="text" class="form-control" id="cargo" placeholder="" name="cedula" required/>
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
    <div class="col-md-4">
        <label for="orden_fisica" class="form-label">
          Tiene Orden Fisica?
        </label>
        <br>
        <select id="orden_fisica" class="custom-select" name="orden_fisica" required>
          <option></option>
          <option>Sí</option>
          <option>No</option>
        </select>
      </div>

      <div class="col-md-4">
        <label for="examen_enfasis" class="form-label">
          Exámen de enfasis
        </label>
        <br>
        <select id="examen_enfasis" class="custom-select" name="examen_enfasis" required>
          <option selected>Sin asignar</option>
          <option>Exámen 1</option>
          <option>Exámen 2</option>
        </select>
      </div>
      <div class="col-6">
        <label for="observaciones" class="form-label">
          Observaciones
        </label>
        <textarea type="text" class="form-control" rows="5" id="cargo" placeholder="" name="observaciones" required></textarea>
      </div>

    <div class="col-12"></div>
    <div class="col-12">
      <button id="guardar" type="button" class="btn btn-success" onclick="confirmSubmit(event)">
        Guardar
    </div>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.all.min.js"></script>
<script>
  function confirmSubmit(event) {
  event.preventDefault(); // Prevenimos el envío del formulario por defecto
  // Enviamos el formulario mediante AJAX
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
}
</script> <!--aqui diseñamos nuestro formulario orden-->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
