<?php include 'proteger.php'; ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADMIN PROLISEG LTDA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index-user.php"><img class="main-logo" src="img/logo/logosn.png" style="height: 100px;"
                        alt="" /></a> <br><br>
                <strong><a href="index-user.php"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a title="Inicio" href="index-user.php" aria-expanded="false">
                                <span class="educate-icon educate-home icon-wrap" aria-hidden="true"></span>
                                <span class="mini-click-non">Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow" href="todos-empleados-user.php" aria-expanded="false">
                                <span class="educate-icon educate-student icon-wrap"></span>
                                <span class="mini-click-non">Empleados</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Todos los empleados" href="todos-empleados-user.php"><span
                                            class="mini-sub-pro">Todos los empleados</span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="todos-lugares-user.php" aria-expanded="false">
                                <span class="educate-icon educate-course icon-wrap"></span>
                                <span class="mini-click-non">Lugares</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Todos los lugares" href="todos-lugares-user.php"><span
                                            class="mini-sub-pro">Todos los lugares</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>

    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index-user.php"><img class="main-logo" src="img/logo/logo.png" style="height: 30px;"
                                alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse"
                                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">

                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle"><i
                                                            class="educate-icon educate-bell"
                                                            aria-hidden="true"></i><span
                                                            class="indicator-nt"></span></a>

                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="img/product/1.png" alt="" />
                                                        <span class="admin-name">Usuario</span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu"
                                                        class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span
                                                                    class="edu-icon edu-home-admin author-log-ic"></span>Mi
                                                                Cuenta</a></li>
                                                        <li><a href="#"><span
                                                                    class="edu-icon edu-settings author-log-ic"></span>Configuración</a>
                                                        </li>
                                                        <li><a href="logout.php"><span
                                                                    class="edu-icon edu-locked author-log-ic"></span>Cerrar
                                                                Sesión</a></li>
                                                    </ul>
                                                </li>

                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown"
                                                        role="button" aria-expanded="false"
                                                        class="nav-link dropdown-toggle"><i
                                                            class="educate-icon educate-menu"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li>
                                            <a href="index-user.php">Inicio</a>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#menuEmpleados" href="#">Empleados
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span>
                                            </a>
                                            <ul id="menuEmpleados" class="collapse dropdown-header-top">
                                                <li><a href="todos-empleados-user.php">Todos los empleados</a></li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#menuLugares" href="#">Lugares
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span>
                                            </a>
                                            <ul id="menuLugares" class="collapse dropdown-header-top">
                                                <li><a href="todos-lugares-user.php">Todos los lugares</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Buscar..."
                                                    class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="index-user.php">Inicio</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Perfil empleado</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    // Incluir conexión a la base de datos
                    include('db_config.php');

                    // Validar si se recibió la cédula por GET
                    if (isset($_GET['cedula'])) {
                        $cedula = $_GET['cedula'];

                        // Consulta segura
                        $query = "SELECT * FROM empleados WHERE cedula = ?";
                        $stmt = $conexion->prepare($query);
                        $stmt->bind_param("s", $cedula);
                        $stmt->execute();
                        $resultado = $stmt->get_result();

                        if ($resultado->num_rows > 0) {
                            $empleado = $resultado->fetch_assoc();

                            // Variables para insertar en el HTML
                            $nombre = $empleado['nombre'];
                            $cedula = $empleado['cedula'];
                            $direccion = $empleado['direccion'];
                            $telefono = $empleado['celular'];
                            $email = $empleado['email'];
                            $fecha_nacimiento = $empleado['fecha_nacimiento'];
                            $genero = $empleado['genero'];

                            $estado_civil = $empleado['estado_civil'];
                            $formacion = $empleado['formacion'];
                            $experiencia = $empleado['experiencia'];
                            $puesto = $empleado['puesto_asignado'];
                            $cargo = $empleado['cargo'];
                            $tipo_contrato = $empleado['tipo_contrato'];
                            $sueldo = $empleado['sueldo'];
                            $fecha_ingreso = $empleado['fecha_ingreso'];
                            $hoja_vida = $empleado['hoja_vida_ruta'];
                            $estado = $empleado['estado'];
                            $observaciones = $empleado['observaciones'];// o 'cargo' si prefieres
                            $foto = !empty($empleado['foto_perfil_ruta']) ? $empleado['foto_perfil_ruta'] : 'img/profile/default.png';

                            $id_lugar = $empleado['puesto_asignado'];

                            $sql = "SELECT nombre FROM lugares_seguridad WHERE id_lugar = ?";
                            $stmt = $conexion->prepare($sql);
                            $stmt->bind_param("i", $id_lugar);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            $nombre_lugar = '';
                            if ($row = $result->fetch_assoc()) {
                                $nombre_lugar = $row['nombre'];
                            }

                            $departamento = $nombre_lugar;




                            ?>

                            <!-- HTML con datos insertados -->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="profile-info-inner">
                                    <div class="profile-img">
                                        <img src="<?php echo $foto; ?>" alt="Foto de perfil" />
                                    </div>
                                    <div class="profile-details-hr">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                <div class="address-hr">
                                                    <p><b>Nombre</b><br /> <?php echo htmlspecialchars($nombre); ?></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                    <p><b>Departamento</b><br /> <?php echo htmlspecialchars($departamento); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                <div class="address-hr">
                                                    <p><b>Email</b><br /> <?php echo htmlspecialchars($email); ?></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                    <p><b>Teléfono</b><br /> <?php echo htmlspecialchars($telefono); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="address-hr">
                                                    <p><b>Dirección</b><br /> <?php echo htmlspecialchars($direccion); ?></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <?php
                        } else {
                            echo "<p>No se encontró un empleado con esa cédula.</p>";
                        }

                        $stmt->close();
                    } else {
                        echo "<p>No se ha proporcionado una cédula.</p>";
                    }
                    ?>




                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Informacion Personal</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">


                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="review-content-section">

                                                <!-- Datos principales -->
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Nombre completo</b><br />
                                                                <?php echo htmlspecialchars($nombre); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Cédula</b><br />
                                                                <?php echo htmlspecialchars($cedula); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Teléfono</b><br />
                                                                <?php echo htmlspecialchars($telefono); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Email</b><br />
                                                                <?php echo htmlspecialchars($email); ?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Otros datos personales -->
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Fecha de nacimiento</b><br />
                                                                <?php echo htmlspecialchars($fecha_nacimiento); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Género</b><br />
                                                                <?php echo htmlspecialchars($genero); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Estado Civil</b><br />
                                                                <?php echo htmlspecialchars($estado_civil); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Dirección</b><br />
                                                                <?php echo htmlspecialchars($direccion); ?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Información laboral -->
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Cargo</b><br />
                                                                <?php echo htmlspecialchars($cargo); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Puesto asignado</b><br />
                                                                <?php echo htmlspecialchars($puesto); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Tipo de contrato</b><br />
                                                                <?php echo htmlspecialchars($tipo_contrato); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Sueldo</b><br />
                                                                <?php echo htmlspecialchars($sueldo); ?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Fechas y estado -->
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Fecha de ingreso</b><br />
                                                                <?php echo htmlspecialchars($fecha_ingreso); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Estado</b><br />
                                                                <?php echo htmlspecialchars($estado); ?></p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <br><br><br>
                                                <!-- Formación -->
                                                <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <h3>Formación Académica</h3>
                                                        <p><?php echo nl2br(htmlspecialchars($formacion)); ?></p>
                                                    </div>
                                                </div>

                                                <!-- Experiencia -->
                                                <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <h3>Experiencia</h3>
                                                        <p><?php echo nl2br(htmlspecialchars($experiencia)); ?></p>
                                                    </div>
                                                </div>

                                                <!-- Observaciones -->
                                                <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <h3>Observaciones</h3>
                                                        <p><?php echo nl2br(htmlspecialchars($observaciones)); ?></p>
                                                    </div>
                                                </div>
                                                <!-- Hoja de Vida --> <br><br><br><br>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                                                    <?php if (!empty($hoja_vida)): ?>
                                                        <a href="<?php echo htmlspecialchars($hoja_vida); ?>"
                                                            class="btn btn-primary" download>
                                                            <i class="fa fa-download"></i> Descargar Hoja de Vida
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php


                                $lugares = mysqli_query($conexion, "SELECT id_lugar, nombre FROM lugares_seguridad");

                                if (!$lugares) {
                                    die("Error al consultar lugares: " . mysqli_error($conexion));
                                }
                                ?>
                                



                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="footer-copy-right">
                                <p>Copyright © 2025. <a href="https://proliseg.com">PROLISEG LTDA</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- tab JS
        ============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->

</body>

</html>