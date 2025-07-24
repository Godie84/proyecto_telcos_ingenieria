<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard Demo | AppSsistencia</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .card-text {
            height: 100px;
        }
    </style>
</head>

<body class="sb-nav-fixed text-dark">
    <!-- TOP NAV -->
    <nav class="sb-topnav navbar navbar-expand-lg navbar-light" style="background-color: #201f49;">
        <a class="navbar-brand ps-3" href="dashboard_demo.html">
            <img src="../assets/img/logo_telcos_original_blanco.png" alt="Logo Telcos" width="140" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link text-white" href="#">Usuarios</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Reporte actividades</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">AppTransportes</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">AppPermisos</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Formularios HSEQ</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Cerrar sesión</a></li>
            </ul>
        </div>
    </nav>

    <!-- SIDEBAR + MAIN -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Panel principal
                        </a>

                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Páginas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="collapsePages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Usuarios</a>
                                <a class="nav-link" href="#">Reporte actividades</a>
                                <a class="nav-link" href="#">AppTransportes</a>
                                <a class="nav-link" href="#">Permisos</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">¡Bienvenido!</div>
                    <div class="small">Admin Demo</div>
                    <div class="small">Rol: Administrador</div>
                </div>
            </nav>
        </div>

        <!-- MAIN -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container mt-4 text-dark">
                    <div class="row justify-content-center">

                        <!-- CARD: Usuarios -->
                        <div class="col-md-3 mb-4">
                            <div class="card h-100 shadow bg-white border-0">
                                <img src="../assets/img/Face_reg.png" class="card-img-top mx-auto d-block" style="max-width: 150px; height: 150px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><b>Administrar usuarios</b></h5>
                                    <p class="card-text">Administra usuarios que ingresan a la Web y App móvil.</p>
                                    <a href="#" class="btn btn-primary">Gestionar</a>
                                </div>
                            </div>
                        </div>

                        <!-- CARD: Reporte actividades -->
                        <div class="col-md-3 mb-4">
                            <div class="card h-100 shadow bg-white border-0">
                                <img src="../assets/img/Tiempo.png" class="card-img-top mx-auto d-block" style="max-width: 150px; height: 150px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><b>Reporte actividades</b></h5>
                                    <p class="card-text">Generar reportes para la app de actividades.</p>
                                    <a href="#" class="btn btn-primary">Gestionar</a>
                                </div>
                            </div>
                        </div>

                        <!-- CARD: Transportes -->
                        <div class="col-md-3 mb-4">
                            <div class="card h-100 shadow bg-white border-0">
                                <img src="../assets/img/Transporte.png" class="card-img-top mx-auto d-block" style="max-width: 150px; height: 150px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><b>Transportes</b></h5>
                                    <p class="card-text">Consulta y gestiona información de flota.</p>
                                    <a href="#" class="btn btn-primary">Gestionar</a>
                                </div>
                            </div>
                        </div>

                        <!-- CARD: Permisos -->
                        <div class="col-md-3 mb-4">
                            <div class="card h-100 shadow bg-white border-0">
                                <img src="../assets/img/Permisos_1.png" class="card-img-top mx-auto d-block" style="max-width: 150px; height: 150px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><b>Permisos</b></h5>
                                    <p class="card-text">Gestión de solicitudes y reportes de permisos.</p>
                                    <a href="#" class="btn btn-primary">Gestionar</a>
                                </div>
                            </div>
                        </div>

                        <!-- CARD: HSEQ -->
                        <div class="col-md-3 mb-4">
                            <div class="card h-100 shadow bg-white border-0">
                                <img src="../assets/img/hseq.png" class="card-img-top mx-auto d-block" style="max-width: 150px; height: 150px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><b>HSEQ</b></h5>
                                    <p class="card-text">Formulario para reportar actos o condiciones inseguras.</p>
                                    <a href="#" class="btn btn-primary">Gestionar</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
