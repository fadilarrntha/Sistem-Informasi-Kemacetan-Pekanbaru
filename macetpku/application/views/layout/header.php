<!--
=========================================================
* Soft UI Design System - v1.0.9
=========================================================

* Product Page:  https://www.creative-tim.com/product/soft-ui-design-system 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/') ?>img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?= base_url('assets/') ?>img/logo.png">
	<title>
        <?=
		$judul; ?>
	</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- Nucleo Icons -->
	<link href="<?= base_url('assets/') ?>css/nucleo-icons.css" rel="stylesheet" />
	<link href="<?= base_url('assets/') ?>css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<link href="<?= base_url('assets/') ?>css/nucleo-svg.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
	<link id="pagestyle" href="<?= base_url('assets/') ?>css/soft-design-system.css?v=1.0.9" rel="stylesheet" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
	 <style>
    	#map { height: 580px; }
  	</style>
</head>

<body class="presentation-page">
	<!-- Navbar -->
	<div class="container position-sticky z-index-sticky top-0">
		<div class="row">
			<div class="col-12">
				<nav
					class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
					<div class="container-fluid px-0">
						<a class="navbar-brand font-weight-bolder ms-sm-3"
							href="https://demos.creative-tim.com/soft-ui-design-system/index.html" rel="tooltip"
							title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
							Sistem Informasi Kemacetan di Pekanbaru
						</a>
						<button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
							data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
							aria-label="Toggle navigation">
							<span class="navbar-toggler-icon mt-2">
								<span class="navbar-toggler-bar bar1"></span>
								<span class="navbar-toggler-bar bar2"></span>
								<span class="navbar-toggler-bar bar3"></span>
							</span>
						</button>
						<!-- navigasi logout dan login -->
						<?php 
						if ($this->session->userdata('email')){
						?>
						<div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
							<ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100">
								<li class="nav-item ms-lg-auto">
									<a class="nav-link nav-link-icon me-2"
                                        href="<?= base_url('Auth/logout'); ?>"
										>
										<i class="fa fa-sign-out"></i>
										<p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip"
											data-bs-placement="bottom">Logout</p>
									</a>
								</li>
							</ul>
						</div>
						<?php 
						}else{
						?>
						<div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
							<ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100">
								<li class="nav-item ms-lg-auto">
									<a class="nav-link nav-link-icon me-2"
                                        href="<?= base_url('Auth'); ?>"
										>
										<i class="fa fa-sign-out"></i>
										<p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip"
											data-bs-placement="bottom">Login</p>
									</a>
								</li>
							</ul>
						</div>
						<?php }?>
						<!-- akhir navigasi logout dan login -->
					</div>
				</nav>
				<!-- End Navbar -->
			</div>
		</div>
	</div>
