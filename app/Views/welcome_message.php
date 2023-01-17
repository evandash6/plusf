<!DOCTYPE html>
<html lang="es" dir="ltr" manifest="cache.appcache">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="<?=base_url()?>/frontend/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ServicioPlus</title>
	<!-- Global stylesheets -->
	<!-- Iconos -->
	<link href="<?=base_url()?>/frontend/icons/phosphor/styles.min.css" rel="stylesheet" type="text/css">
	<!-- Estilo General -->
	<link href="<?=base_url()?>/frontend/css/all.min.css" id="stylesheet" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>/frontend/css/propio.css" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- Configuracion inicial -->
	<script src="<?=base_url()?>/frontend/js/configurator.js"></script>
	<script src="<?=base_url()?>/frontend/js/bootstrap.bundle.min.js"></script>
	<!-- Theme JS files -->
	<script src="<?=base_url()?>/frontend/js/app.js"></script>
</head>
<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-xl navbar-static shadow">
		<div class="container-fluid">
			<div class="navbar-brand flex-1">
				<a href="#" class="d-inline-flex align-items-center">
                    <img style="height:40px" src="<?=base_url()?>/frontend/favicon.ico">
                    <img style="height:40px" src="<?=base_url()?>/frontend/img/splus.webp" class="ml-3 mb-1">
				</a>
			</div>

			<div class="d-flex w-100 w-xl-auto overflow-auto overflow-xl-visible scrollbar-hidden border-top border-top-xl-0 order-1 order-xl-0 pt-2 pt-xl-0 mt-2 mt-xl-0">
				<ul class="nav gap-1 justify-content-center flex-nowrap flex-xl-wrap mx-auto">
					<li class="nav-item">
						<a href="#" class="navbar-nav-link rounded">
							<i class="ph-house me-2"></i>
							Inicio
						</a>
					</li>
                    <li class="nav-item">
						<a href="#" class="navbar-nav-link rounded">
							<i class="ph-gear-six me-2"></i>
							Administración
						</a>
					</li>
                    <li class="nav-item">
						<a href="#" class="navbar-nav-link rounded">
							<i class="ph-users me-2"></i>
							Empleados
						</a>
					</li>
                    <li class="nav-item">
						<a href="#" class="navbar-nav-link rounded">
							<i class="ph-wrench me-2"></i>
							Técnicos
						</a>
					</li>
                    <li class="nav-item">
						<a href="#" class="navbar-nav-link rounded">
							<i class="ph-truck me-2"></i>
							Servicios
						</a>
					</li>
                    <li class="nav-item">
						<a href="#" class="navbar-nav-link rounded">
							<i class="ph-list-checks me-2"></i>
							Control de Calidad
						</a>
					</li>
				</ul>
			</div>
			<ul class="nav gap-1 flex-xl-1 justify-content-end order-0 order-xl-1">
				<li class="nav-item nav-item-dropdown-xl dropdown">
					<a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
						<div class="status-indicator-container">
							<img src="<?=base_url()?>/frontend/img/avatar.png" class="w-32px h-32px rounded-pill" alt="">
							<span class="status-indicator bg-success"></span>
						</div>
						<span class="d-none d-md-inline-block mx-md-2">Usuario</span>
					</a>

					<div class="dropdown-menu dropdown-menu-end">
						<a href="#" class="dropdown-item">
							<i class="ph-user-circle me-2"></i>
							Mi perfil
						</a>
						<a href="#" class="dropdown-item">
							<i class="ph-gear me-2"></i>
							Ajustes de Cuenta
						</a>
                        <div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="ph-sign-out me-2"></i>
							Salir
						</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content container d-lg-flex">
						<div class="d-flex">
							<h4 class="page-title mb-0">
								Home / <span class="fw-normal">Dashboard</span>
							</h4>

							<a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
								<i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content container pt-0">

					<div class="card">
						<div class="card-header">Mnaue</div>
						<div class="card-body">
							manuelillo
						</div>
					</div>
			

				</div>
				<!-- /content area -->


				<!-- Footer -->
				<div class="navbar navbar-sm navbar-footer border-top">
					<div class="container-fluid">
						<span>Derechos Reservados &copy; 2022 <a href="#">Splus</a></span>
					</div>
				</div>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

	<!-- Demo config -->
	<div class="offcanvas offcanvas-end" tabindex="-1" id="demo_config">
		<div class="position-absolute top-50 end-100 visible">
			<button type="button" class="btn btn-primary btn-icon translate-middle-y rounded-end-0" data-bs-toggle="offcanvas" data-bs-target="#demo_config">
				<i class="ph-gear"></i>
			</button>
		</div>

		<div class="offcanvas-header border-bottom py-0">
			<h5 class="offcanvas-title py-3">Configuración de Tema</h5>
			<button type="button" class="btn btn-light btn-sm btn-icon border-transparent rounded-pill" data-bs-dismiss="offcanvas">
				<i class="ph-x"></i>
			</button>
		</div>

		<div class="offcanvas-body">
			<div class="fw-semibold mb-2">Elegir Color</div>
			<div class="list-group mb-3">
				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-sun ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Tema Blanco</span>
								<div class="fs-sm text-muted">Ideal para equipos en lugares con mucha luz</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="light" checked>
					</div>
				</label>

				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-moon ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Tema Oscuro</span>
								<div class="fs-sm text-muted">Ideal para una vista cansada o lugares ocn poca luz</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="dark">
					</div>
				</label>
			</div>
		</div>
	</div>
	<!-- /demo config -->

</body>
</html>