<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Bagian Meta --}}
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ url('template/img/icons/icon-48x48.png') }}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>Blank Page | AdminKit Demo</title>

{{-- Bagian style CSS --}}
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
                    <span class="align-middle">AdminKit</span>
                </a>
				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="index.html">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
                            <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-up.html">
                            <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
                        </a>
					</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="pages-blank.html">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
                        </a>
					</li>
			</div>
		</nav>

		<div class="main">
            @yield('')

			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"> Dashboard</h1>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Empty card</h5>
								</div>
								<div class="card-body">
                                    <h1>Hello world</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
            {{-- Bagian Footer  --}}
            @include('include.footer')
		</div>
	</div>
    {{-- Bagian JS --}}
    @include('include.script')
</body>
</html>
