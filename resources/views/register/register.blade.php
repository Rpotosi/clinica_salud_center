<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--styles start-->
    @vite([
      'resources/css/register.css'     
    ])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--styles end-->

    <title>Registro</title>

  </head>
  <body>
    <div class="container">
      <br>
      <h2>Nuevo Registro</h2>
      <br>
      <div class="form">
        <form action="http://localhost/projects/Clinica_Salud_Center/public/register/show" method="POST" class="row g-3">
          
          @csrf
          
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">
              Nombre de Usuario
            </label>
            <input type="text" class="form-control" id="inputEmail4" name="username" required/>
           </div>

          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">
              Correo Electrónico
            </label>
            <input type="email" class="form-control" id="inputPassword4" name="email">
          </div>

          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">
              Contraseña
            </label>
            <input type="password" class="form-control" id="inputPassword4" name="password">
          </div>

          <div class="col-6">
            <label for="inputAddress" class="form-label">
              Confirmar Contraseña
            </label>
            <input type="password" class="form-control" id="inputAddress" placeholder="" name="password_confirmation">
          </div>
          <div class="col-12">
            <br>
            <br>
            <button type="submit" class="btn btn-success">
              Guardar
            </button>
          </div>

        </form>
      </div>    
    </div>    
  </body>
</html>