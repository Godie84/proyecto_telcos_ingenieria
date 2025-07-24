<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico" />
  <title>Demo - Gestión Telcos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./assets/css/styles.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
  
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card shadow rounded-3 text-black">
            <div class="row g-0">
              <div class="col-sm-12 col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="./assets/img/igm_no_disp.png" style="width: 180px; height: 40px;" alt="logo de empresa">
                    <br><br>
                  </div>

                  <form id="form-login" onsubmit="return false;">
                    <p>Ingrese el correo electrónico donde llega el desprendible de nómina Telcos.</p>
                    <div class="form-outline mb-4">
                      <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" required />
                    </div>

                    <p>Si es su primer ingreso, debe hacer click en el link generar contraseña</p>
                    <div class="form-outline mb-4">
                      <input type="password" id="txtPass" name="txtPass" class="form-control" placeholder="Contraseña" required />
                    </div>

                    <!-- Mensajes simulados para demo -->
                    <div id="loginMessage" class="alert alert-danger d-none" role="alert">
                      Usuario o contraseña inválida (esto es un mensaje simulado para la demo).
                    </div>

                    <div class="text-center pt-1 mb-1 pb-1">
                      <button type="button" id="entrar" class="btn btn-primary btn-block btn-sm">
                        Ingresar (Demo)
                      </button>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-1">
                      <p><b>¡Si es su primer ingreso u olvidó su contraseña!</b></p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center pb-1">
                      <p><a href="#">Haga click aquí (demo)</a></p>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <p><b>Bienvenido...</b></p>
                  <ol>
                    <li>
                      <p>Recuerde que el correo de ingreso es el mismo a donde le llegan los desprendibles de nómina.</p>
                    </li>
                    <li>
                      <p>Si es nuevo usuario, por favor indiquele a su jefe inmediato que genere un caso en mesa de ayuda para la creación de usuario en la plataforma de permisos.</p>
                    </li>
                    <li>
                      <p>Descargar instructivo para generar la contraseña, <a href="#">click aquí</a>.</p>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-light text-center text-lg-start">
    <div class="text-center p-3 text-white" style="background-color: #201F49;">
      © 2024 Copyright:
      <a class="text-white" href="#">Telcos Ingeniería</a>
    </div>
  </footer>

  <script src="./assets/js/demo_alert.js"></script>
</body>

</html>
