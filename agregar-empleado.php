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
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
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
                <a href="index-admin-php"><img class="main-logo" src="img/logo/logosn.png" style="height: 100px;"
                        alt="" /></a> <br><br>
                <strong><a href="index-user-html"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a title="Inicio" href="index-admin.php" aria-expanded="false">
                                <span class="educate-icon educate-home icon-wrap" aria-hidden="true"></span>
                                <span class="mini-click-non">Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow" href="todos-empleados.php" aria-expanded="false">
                                <span class="educate-icon educate-student icon-wrap"></span>
                                <span class="mini-click-non">Empleados</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Todos los empleados" href="todos-empleados.php"><span
                                            class="mini-sub-pro">Todos los empleados</span></a></li>
                                <li><a title="Agregar empleado" href="agregar-empleado.php"><span
                                            class="mini-sub-pro">Agregar empleado</span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="todos-lugares.php" aria-expanded="false">
                                <span class="educate-icon educate-course icon-wrap"></span>
                                <span class="mini-click-non">Lugares</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Todos los lugares" href="todos-lugares.php"><span
                                            class="mini-sub-pro">Todos los lugares</span></a></li>
                                <li><a title="Agregar lugar" href="agregar-lugar.php"><span class="mini-sub-pro">Agregar
                                            lugar</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="todos-lugares.php" aria-expanded="false">
                                <span class="educate-icon educate-library icon-wrap"></span>
                                <span class="mini-click-non">Horarios</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Ver horario" href="horario-viewer.php"><span
                                            class="mini-sub-pro">Horarios</span></a></li>
                                <li><a title="Agregar horario" href="agregar-horario.php"><span
                                            class="mini-sub-pro">Agregar horario</span></a></li>
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
                        <a href="index-admin.php"><img class="main-logo" src="img/logo/logo.png" style="height: 30px;"
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
                                                        <span class="admin-name">Administrador</span>
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
                                            <a href="index-admin.php">Inicio</a>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#menuEmpleados" href="#">Empleados
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span>
                                            </a>
                                            <ul id="menuEmpleados" class="collapse dropdown-header-top">
                                                <li><a href="todos-empleados.php">Todos los empleados</a></li>
                                                <li><a href="agregar-empleado.php">Agregar empleado</a></li>


                                            </ul>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#menuLugares" href="#">Lugares
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span>
                                            </a>
                                            <ul id="menuLugares" class="collapse dropdown-header-top">
                                                <li><a href="todos-lugares.php">Todos los lugares</a></li>
                                                <li><a href="agregar-lugar.php">Agregar lugar</a></li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#menuHorarios" href="#">Horarios
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span>
                                            </a>
                                            <ul id="menuLugares" class="collapse dropdown-header-top">
                                                <li><a href="horario-viewer.php">Horarios</a></li>
                                                <li><a href="agregar-horario">Agregar horarios</a></li>

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
                                            <li><a href="index-admin.php">Inicio</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Adicionar empleado</span>
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Información Básica</a></li>
                                <li><a href="#reviews">Información de la Cuenta</a></li>
                                <li><a href="#INFORMATION">Información Social</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">


                                                    <?php
                                                    // Conexión a la base de datos
                                                    include 'db_config.php';

                                                    // Consulta los lugares desde la tabla correcta
                                                    $lugares = mysqli_query($conexion, "SELECT id_lugar, nombre FROM lugares_seguridad");

                                                    if (!$lugares) {
                                                        die("Error al consultar lugares: " . mysqli_error($conexion));
                                                    }
                                                    ?>

                                                    <form action="registrar_empleado.php" method="POST"
                                                        enctype="multipart/form-data" id="form-empleado">
                                                        <div class="row">
                                                            <!-- Columna izquierda -->
                                                            <div class="col-lg-6">
                                                                <!-- Foto de Perfil -->
                                                                <div class="form-group">
                                                                    <label>Foto de Perfil (JPG o PNG)</label>
                                                                    <input type="file" name="foto_perfil_ruta"
                                                                        accept="image/jpeg,image/png"
                                                                        class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Nombre Completo</label>
                                                                    <input name="nombre" type="text"
                                                                        class="form-control" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Cédula</label>
                                                                    <input name="cedula" type="text"
                                                                        class="form-control" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Dirección</label>
                                                                    <input name="direccion" type="text"
                                                                        class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Celular</label>
                                                                    <input name="celular" type="text"
                                                                        class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Correo Electrónico</label>
                                                                    <input name="email" type="email"
                                                                        class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Fecha de Nacimiento</label>
                                                                    <input name="fecha_nacimiento" type="date"
                                                                        class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Género</label>
                                                                    <select name="genero" class="form-control">
                                                                        <option value="" disabled selected>Seleccionar
                                                                            género</option>
                                                                        <option value="Masculino">Masculino</option>
                                                                        <option value="Femenino">Femenino</option>
                                                                        <option value="Otro">Otro</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Estado Civil</label>
                                                                    <select name="estado_civil" class="form-control">
                                                                        <option value="" disabled selected>Seleccionar
                                                                            estado civil</option>
                                                                        <option value="Soltero">Soltero</option>
                                                                        <option value="Casado">Casado</option>
                                                                        <option value="Divorciado">Divorciado</option>
                                                                        <option value="Viudo">Viudo</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Observaciones</label>
                                                                    <textarea name="observaciones"
                                                                        class="form-control"></textarea>
                                                                </div>
                                                            </div>

                                                            <!-- Columna derecha -->
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Hoja de Vida (PDF)</label>
                                                                    <input type="file" name="hoja_vida_ruta"
                                                                        accept="application/pdf" class="form-control"
                                                                        required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Formación Académica</label>
                                                                    <select name="formacion" class="form-control">
                                                                        <option value="" disabled selected>Seleccionar
                                                                            formación</option>
                                                                        <option value="Bachiller">Bachiller</option>
                                                                        <option value="Técnica">Técnica</option>
                                                                        <option value="Tecnóloga">Tecnóloga</option>
                                                                        <option value="Profesional">Profesional</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Experiencia Laboral</label>
                                                                    <select name="experiencia" class="form-control">
                                                                        <option value="" disabled selected>Seleccionar
                                                                            experiencia</option>
                                                                        <?php for ($i = 1; $i <= 10; $i++): ?>
                                                                            <option
                                                                                value="<?= $i ?> año<?= $i > 1 ? 's' : '' ?>">
                                                                                <?= $i ?> año<?= $i > 1 ? 's' : '' ?>
                                                                            </option>
                                                                        <?php endfor; ?>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Puesto Asignado (Lugar)</label>
                                                                    <select name="puesto_asignado" class="form-control"
                                                                        required>
                                                                        <option value="" disabled selected>Seleccionar
                                                                            lugar</option>
                                                                        <?php while ($lugar = mysqli_fetch_assoc($lugares)): ?>
                                                                            <option value="<?= $lugar['nombre'] ?>">
                                                                                <?= $lugar['nombre'] ?></option>
                                                                        <?php endwhile; ?>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Cargo</label>
                                                                    <select name="cargo" class="form-control" required>
                                                                        <option value="" disabled selected>Seleccionar
                                                                            cargo</option>
                                                                        <option value="Guarda de Seguridad">Guarda de
                                                                            Seguridad</option>
                                                                        <option value="Supervisor">Supervisor</option>
                                                                        <option value="Ingeniero">Ingeniero</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Sueldo</label>
                                                                    <select name="sueldo" class="form-control">
                                                                        <option value="" disabled selected>Seleccionar
                                                                            tipo de sueldo</option>
                                                                        <option value="Salario Básico + Horas Extras">
                                                                            Salario Básico + Horas Extras</option>
                                                                        <option value="Salario Básico">Salario Básico
                                                                        </option>
                                                                        <option value="Salario Profesional">Salario
                                                                            Profesional</option>
                                                                        <option value="Salario Supervisor">Salario
                                                                            Supervisor</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Fecha de Ingreso</label>
                                                                    <input name="fecha_ingreso" type="date"
                                                                        class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Estado del Empleado</label>
                                                                    <select name="estado" class="form-control">
                                                                        <option value="" disabled selected>Seleccionar
                                                                            estado</option>
                                                                        <option value="Activo">Activo</option>
                                                                        <option value="Inactivo">Inactivo</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-center mt-3">
                                                            <button type="submit" class="btn btn-primary"
                                                                id="submitBtn">Guardar Empleado</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Correo Electrónico">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control"
                                                                    placeholder="Teléfono">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Contraseña">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Confirmar Contraseña">
                                                            </div>
                                                            <a href="#!"
                                                                class="btn btn-primary waves-effect waves-light">Enviar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="url" class="form-control"
                                                                    placeholder="URL de Facebook">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control"
                                                                    placeholder="URL de Twitter">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control"
                                                                    placeholder="Google Plus">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control"
                                                                    placeholder="URL de LinkedIn">
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary waves-effect waves-light">Enviar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2025. <a href="https://proliseg.com">PROLISEG LTDA</a></p>
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
    <!-- maskedinput JS
        ============================================ -->
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/masking-active.js"></script>
    <!-- datepicker JS
        ============================================ -->
    <script src="js/datepicker/jquery-ui.min.js"></script>
    <script src="js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
        ============================================ -->
    <script src="js/form-validation/jquery.form.min.js"></script>
    <script src="js/form-validation/jquery.validate.min.js"></script>
    <script src="js/form-validation/form-active.js"></script>
    <!-- dropzone JS
        ============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
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