<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>SDN 1 Teluk</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('')}}assets/admin/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{asset('')}}assets/admin/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('') }}assets/admin/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('')}}assets/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('')}}assets/admin/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('')}}assets/admin/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="{{ route('adm.dashboardadmin') }}" class="logo">
					<span class="text-light fw-bold">Admin Panel</span>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						{{-- <li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
										Messages
										<a href="#" class="small">Mark all as read</a>
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img">
													<img src="{{asset('')}}assets/admin/img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jimmy Denis</span>
													<span class="block">
														How are you ?
													</span>
													<span class="time">5 minutes ago</span>
												</div>
											</a>
											<a href="#">
												<div class="notif-img">
													<img src="{{asset('')}}assets/admin/img/chadengle.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Chad</span>
													<span class="block">
														Ok, Thanks !
													</span>
													<span class="time">12 minutes ago</span>
												</div>
											</a>
											<a href="#">
												<div class="notif-img">
													<img src="{{asset('')}}assets/admin/img/mlane.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jhon Doe</span>
													<span class="block">
														Ready for the meeting today...
													</span>
													<span class="time">12 minutes ago</span>
												</div>
											</a>
											<a href="#">
												<div class="notif-img">
													<img src="{{asset('')}}assets/admin/img/talha.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Talha</span>
													<span class="block">
														Hi, Apa Kabar ?
													</span>
													<span class="time">17 minutes ago</span>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">4</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
												<div class="notif-content">
													<span class="block">
														New user registered
													</span>
													<span class="time">5 minutes ago</span>
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
												<div class="notif-content">
													<span class="block">
														Rahmad commented on Admin
													</span>
													<span class="time">12 minutes ago</span>
												</div>
											</a>
											<a href="#">
												<div class="notif-img">
													<img src="{{asset('')}}assets/admin/img/profile2.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="block">
														Reza send messages to you
													</span>
													<span class="time">12 minutes ago</span>
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
												<div class="notif-content">
													<span class="block">
														Farrah liked Admin
													</span>
													<span class="time">17 minutes ago</span>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file-1"></i>
													<span class="text">Generated Report</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-database"></i>
													<span class="text">Create New Database</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-pen"></i>
													<span class="text">Create New Post</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-interface-1"></i>
													<span class="text">Create New Task</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-list"></i>
													<span class="text">Completed Tasks</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file"></i>
													<span class="text">Create New Invoice</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li> --}}
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="{{asset('')}}assets/admin/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="{{asset('')}}assets/admin/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>{{ Auth::user()->name }}</h4>
												<p class="text-muted">{{ Auth::user()->email }}</p>
                                                {{-- <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a> --}}
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										{{-- <a class="dropdown-item" href="#">My Profile</a>
										<a class="dropdown-item" href="#">My Balance</a>
										<a class="dropdown-item" href="#">Inbox</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Account Setting</a> --}}
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{asset('')}}assets/admin/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{ Auth::user()->name }}
									<span class="user-level">{{ Auth::user()->email }}</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
                    {{-- MENU UTAMA --}}
					<ul class="nav nav-primary">
                        {{-- MENU --}}
                        <li class="nav-item {{\Request::route()->getName() == 'adm.dashboardadmin' ? 'active submenu' : null }}">
							<a href="{{ route('adm.dashboardadmin') }}">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Pendaftaran</h4>
						</li>
						<li class="nav-item {{\Request::route()->getName() == 'adm.pendaftaran' ? 'active submenu' : null }}">
							<a href="{{ route('adm.pendaftaran') }}">
								<i class="fas fa-pen-square"></i>
								<p>Pendaftaran Siswa</p>
							</a>
						</li>
						<li class="nav-item {{\Request::route()->getName() == 'adm.pengaturanpendaftaran' ? 'active submenu' : null }}">
							<a href="{{ route('adm.pengaturanpendaftaran') }}">
								<i class="fas fa-pen-square"></i>
								<p>Pengaturan Pendaftaran</p>
							</a>
						</li>

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Master Data</h4>
						</li>

						<li class="nav-item {{\Request::route()->getName() == 'adm.siswa' ? 'active submenu' : null }}">
							<a href="{{ route('adm.siswa') }}">
								<i class="fas fa-pen-square"></i>
								<p>Siswa</p>
							</a>
						</li>

						<li class="nav-item {{\Request::route()->getName() == 'adm.kelas' ? 'active submenu' : null }}">
							<a href="{{ route('adm.kelas') }}">
								<i class="fas fa-pen-square"></i>
								<p>Kelas</p>
							</a>
						</li>

						<li class="nav-item {{\Request::route()->getName() == 'adm.user' ? 'active submenu' : null }}">
							<a href="{{ route('adm.user') }}">
								<i class="fas fa-pen-square"></i>
								<p>User</p>
							</a>
						</li>

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Content Management</h4>
						</li>
						<li class="nav-item {{\Request::route()->getName() == 'adm.sambutan' || \Request::route()->getName() == 'adm.totalguru' ||
							\Request::route()->getName() == 'adm.prestasi' || \Request::route()->getName() == 'adm.ekstra' ? 'active submenu' : null }}">
							<a data-toggle="collapse" href="#contentdashboard">
								<i class="fas fa-table"></i>
								<p>Dashboard</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="contentdashboard">
								<ul class="nav nav-collapse">
									<li class="{{\Request::route()->getName() == 'adm.sambutan' ? 'active' : null }}">
										<a href="{{ route('adm.sambutan') }}">
											<span class="sub-item">Sambutan</span>
										</a>
									</li>
									<li class="{{\Request::route()->getName() == 'adm.prestasi' ? 'active' : null }}">
										<a href="{{ route('adm.prestasi') }}">
											<span class="sub-item">Prestasi</span>
										</a>
									</li>
									<li class="{{\Request::route()->getName() == 'adm.ekstra' ? 'active' : null }}">
										<a href="{{ route('adm.ekstra') }}">
											<span class="sub-item">Ekstrakulikuler</span>
										</a>
									</li>
									<li class="{{\Request::route()->getName() == 'adm.header' ? 'active' : null }}">
										<a href="{{ route('adm.header') }}">
											<span class="sub-item">Header</span>
										</a>
									</li>
									<li class="{{\Request::route()->getName() == 'adm.totalguru' ? 'active' : null }}">
										<a href="{{ route('adm.totalguru') }}">
											<span class="sub-item">Total Guru, Karyawan, Siswa</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item {{\Request::route()->getName() == 'adm.gurudankaryawan' || \Request::route()->getName() == 'adm.visidanmisi' ? 'active submenu' : null }}">
							<a data-toggle="collapse" href="#contentprofile">
								<i class="fas fa-table"></i>
								<p>Profile</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="contentprofile">
								<ul class="nav nav-collapse">
									<li class="{{\Request::route()->getName() == 'adm.gurudankaryawan' ? 'active' : null }}">
										<a href="{{ route('adm.gurudankaryawan') }}">
											<span class="sub-item">Guru dan Karyawan</span>
										</a>
									</li>
									<li class="{{\Request::route()->getName() == 'adm.visidanmisi' ? 'active' : null }}">
										<a href="{{ route('adm.visidanmisi') }}">
											<span class="sub-item">Visi dan Misi</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item {{\Request::route()->getName() == 'adm.ruanglab' || \Request::route()->getName() == 'adm.ruangguru'
						|| \Request::route()->getName() == 'adm.kantin' || \Request::route()->getName() == 'adm.mushola' || \Request::route()->getName() == 'adm.perpustakaan' ? 'active submenu' : null }}">
							<a data-toggle="collapse" href="#contentfasilitas">
								<i class="fas fa-table"></i>
								<p>Fasilitas</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="contentfasilitas">
								<ul class="nav nav-collapse">
									<li class="{{\Request::route()->getName() == 'adm.ruanglab' ? 'active' : null }}">
										<a href="{{ route('adm.ruanglab') }}">
											<span class="sub-item">Ruang Lab</span>
										</a>
									</li>
									<li class="{{\Request::route()->getName() == 'adm.ruangguru' ? 'active' : null }}">
										<a href="{{ route('adm.ruangguru') }}">
											<span class="sub-item">Ruang Guru</span>
										</a>
									</li>
									<li class="{{\Request::route()->getName() == 'adm.kantin' ? 'active' : null }}">
										<a href="{{ route('adm.kantin') }}">
											<span class="sub-item">Kantin</span>
										</a>
									</li>
									<li class="{{\Request::route()->getName() == 'adm.mushola' ? 'active' : null }}">
										<a href="{{ route('adm.mushola') }}">
											<span class="sub-item">Mushola</span>
										</a>
									</li>
									<li class="{{\Request::route()->getName() == 'adm.perpustakaan' ? 'active' : null }}">
										<a href="{{ route('adm.perpustakaan') }}">
											<span class="sub-item">Perpustakaan</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item {{\Request::route()->getName() == 'adm.galerifoto' ? 'active submenu' : null }}">
							<a data-toggle="collapse" href="#contentgaleri">
								<i class="fas fa-table"></i>
								<p>Galeri</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="contentgaleri">
								<ul class="nav nav-collapse">
									<li class="{{\Request::route()->getName() == 'adm.galerifoto' ? 'active' : null }}">
										<a href="{{ route('adm.galerifoto') }}">
											<span class="sub-item">Galeri Foto</span>
										</a>
									</li>
									<li class="{{\Request::route()->getName() == 'adm.galerivideo' ? 'active' : null }}">
										<a href="{{ route('adm.galerivideo') }}">
											<span class="sub-item">Galeri Video</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item {{\Request::route()->getName() == 'adm.contentberita' ? 'active submenu' : null }}">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Berita</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li class="{{\Request::route()->getName() == 'adm.contentberita' ? 'active' : null }}">
										<a href="{{ route('adm.contentberita') }}">
											<span class="sub-item">Content Berita</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item {{\Request::route()->getName() == 'adm.kontak' ? 'active submenu' : null }}">
							<a data-toggle="collapse" href="#kontak">
								<i class="fas fa-table"></i>
								<p>Kontak</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="kontak">
								<ul class="nav nav-collapse">
									<li class="{{\Request::route()->getName() == 'adm.kontak' ? 'active' : null }}">
										<a href="{{ route('adm.kontak') }}">
											<span class="sub-item">Kontak</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    @yield('content')
                </div>
            </div>

            <footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<span>SDN 1 Teluk Purwokerto Selatan</span>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						Copyright © 20211001 - {{ now()->year }}
					</div>
				</div>
			</footer>

        </div>

		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="{{asset('')}}assets/admin/js/core/jquery.3.2.1.min.js"></script>
	<script src="{{asset('')}}assets/admin/js/core/popper.min.js"></script>
	<script src="{{asset('')}}assets/admin/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="{{asset('')}}assets/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="{{asset('')}}assets/admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{asset('')}}assets/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="{{asset('')}}assets/admin/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="{{asset('')}}assets/admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="{{asset('')}}assets/admin/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="{{asset('')}}assets/admin/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="{{asset('')}}assets/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{asset('')}}assets/admin/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="{{asset('')}}assets/admin/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="{{asset('')}}assets/admin/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="{{asset('')}}assets/admin/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="{{asset('')}}assets/admin/js/setting-demo.js"></script>
	<script src="{{asset('')}}assets/admin/js/demo.js"></script>
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 5,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
    @stack('js')
</body>
</html>
