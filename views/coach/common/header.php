<link href="<?php echo base_url('assets/css/bootstrap5.css')?>" rel='stylesheet' type="text/css" media="all" />

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main" style="overflow-y: hidden;">
	<div class="sidenav-header" style="text-align: center;padding-top: 30px;">
		<i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>

			<span class="ms-1 font-weight-bold text-white">Hello, <?php echo $FirstName;?> <?php echo $LastName;?></span>



	</div>
	<hr class="horizontal light mt-0 mb-2">
	<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main" style="height: 100%;">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link text-white " href="http://localhost/kaiac_canoe/myteam">
					<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">

					</div>
					<span class="nav-link-text ms-1">My team</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white " href="http://localhost/kaiac_canoe/event">
					<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">

					</div>
					<span class="nav-link-text ms-1">Event</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white " href="http://localhost/kaiac_canoe/logout">
					<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">

					</div>
					<span class="nav-link-text ms-1">Logout</span>
				</a>
			</li>

		</ul>
	</div>

</aside>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
