<!doctype html>
<html>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
</head>

<body>
	<?php wp_body_open(); ?>
	<header class="sticky-top">
		<nav class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-between py-3 mb-4 navbar navbar-dark navbar-expand-lg px-5">

			<div class="mb-2 mb-lg-0">
				<a class="navbar-brand col-lg-auto" href="#">
					<img src="<?= get_stylesheet_directory_uri(); ?>/assets/svg/logo-branco-alpina.svg" alt="Alpina">
				</a>
			</div>

			<button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target=".menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="Abrir menu">
				<span class="navbar-toggler-icon text-white"></span>
			</button>

			<div class="nav collapse navbar-collapse justify-content-center justify-content-lg-around menu-principal">

				<ul class="nav mb-2 justify-content-center mb-lg-0">
					<li class="nav-item">
						<a class="nav-link text-white active" aria-current="page" href="#">Início</a>
					</li>
					<li class="nav-item">
						<a class="nav-link link-secondary" href="#">Sobre</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link link-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Soluções
						</a>
						<ul class="dropdown-menu py-0">
							<li class="dropdown-item">
								<a class="d-flex flex-wrap flex-column nav-link text-secondary" href="#">
									<h4><img class="pe-1" src="<?= get_stylesheet_directory_uri(); ?>/assets/svg/tech.svg" alt="Tecnologia">Tecnologia</h4>
									<p>Criação de sites, one page, Implantação de E-commerce e suporte dedicado</p>
								</a>
							</li>
							<li class="dropdown-item">
								<a class="d-flex flex-wrap flex-column nav-link text-secondary" href="#">
									<h4><img class="pe-1" src="<?= get_stylesheet_directory_uri(); ?>/assets/svg/mkt.svg" alt="Tecnologia">Marketing Digital</h4>
									<p>Criação de sites, one page,
										Implantação de E-commerce e
										suporte dedicado</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link link-secondary" href="#">Cases</a>
					</li>
					<li class="nav-item">
						<a class="nav-link link-secondary" href="">Contato</a>
					</li>
				</ul>

				</div>

				<div class="nav collapse navbar-collapse menu-principal justify-content-end align-items-center flex-grow-0">
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link link-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="" aria-expanded="false">
								PT
							</a>
						</li>
					</ul>
					<button class="btn btn-outline-light px-3">Solicitar proposta</button>
				</div>

			
		</nav>
	</header>