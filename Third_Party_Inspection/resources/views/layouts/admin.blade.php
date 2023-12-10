<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon2.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css ') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css ') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css ') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css ') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css ') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href=" {{ asset('assets/css/style.css') }}" rel="stylesheet">

    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/tpInspection-icon.png') }}" alt="">
            <!-- <span class="d-none d-lg-block">TPInspection</span> -->
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item pe-3">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')" class="btn btn-dark"
                        onclick="event.preventDefault();
                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>

                </form>
                {{-- <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">Admin Profile</span>
                </a><!-- End Profile Iamge Icon --> --}}

                {{-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Fazal Brother</h6>
                        <span>Inspector</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="logout.php">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items --> --}}
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- Side Bar Starts -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin') }}">
                <span><i class="bi bi-grid">Dashboard</span></i>
            </a>
        </li>
        <li class="nav-heading">Candidates</li>

        <li class="nav-item">
            <span><a class="nav-link" href="{{ route('candidate-create') }}"><i class='bx bx-user-circle'></i>Add
                    Candidate</a></span>
        </li>
        <li class="nav-item">
            <span><a class="nav-link" href="{{ route('candidate') }}"><i class='bx bx-food-menu'></i>View
                    Candidates</a></span>
        </li>
        <li class="nav-heading">Certificates</li>

        <li class="nav-item">
            <span><a class="nav-link" href="{{ route('certificate-create') }}"><i class='bx bx-message-square-add'></i>Add
                    Certificate</a></span>
        </li>
        <li class="nav-item">
            <span><a class="nav-link" href="{{ route('certificate') }}"><i class='bx bx-food-menu'></i>View
                    Certificates</a></span>
        </li>
    </ul>

</aside>
<!-- End Sidebar-->
@if ($errors->any())
    {{ $showError = '' }}
    @foreach ($errors->all() as $err)
        <?php $showError .= "$err \n"; ?>
    @endforeach
    <input type="hidden" id="err_inpt" value="{{ $showError }}">
    <script>
        let err = document.getElementById('err_inpt').value;
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: err,
        });
    </script>
@endif

@if (session('success'))
    <script>
        Swal.fire({
            title: "Done!",
            text: "{{ session('success') }}",
            icon: "success"
        });
    </script>
@endif

<main id="main" class="main">
    @switch(Route::currentRouteName())
        @case('admin')
            <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
        @break

        @case('candidate-create')
            <div class="pagetitle">
                <h1>Manage Candidate</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item">Add candidate</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
        @break

        @case('candidate')
            <div class="pagetitle">
                <h1>Manage Candidate</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item">View candidate</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
        @break

        @case('candidate-edit')
            <div class="pagetitle">
                <h1>Manage Candidate</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item">Edit candidate</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
        @break

        @case('candidate-delete')
            <div class="pagetitle">
                <h1>Manage Candidate</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item">Delete candidate</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
        @break
        @case('certificate-create')
            <div class="pagetitle">
                <h1>Manage certificate</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item">Add certificate</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
        @break

        @case('certificate')
            <div class="pagetitle">
                <h1>Manage certificate</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item">View certificate</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
        @break

        @case('certificate-edit')
            <div class="pagetitle">
                <h1>Manage certificate</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item">Edit certificate</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
        @break

        @case('certificate-delete')
            <div class="pagetitle">
                <h1>Manage certificate</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item">Delete certificate</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
        @break

        @default
            <div class="pagetitle">
                <h1></h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        {{-- <li class="breadcrumb-item"></li> --}}
                    </ol>
                </nav>
            </div><!-- End Page Title -->
    @endswitch

    @yield('content')

</main>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/apexcharts/apexcharts ') }}.min.js"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle ') }}.min.js"></script>
<script src="{{ asset('assets/vendor/chart.js/chart ') }}.min.js"></script>
<script src="{{ asset('assets/vendor/echarts/echarts ') }}.min.js"></script>
<script src="{{ asset('assets/vendor/quill/quill ') }}.min.js"></script>
<script src="{{ asset('assets/vendor/simple-datatables/simple ') }}-datatables.js"></script>
<script src="{{ asset('assets/vendor/tinymce/tinymce ') }}.min.js"></script>
<script src="{{ asset('assets/vendor/php-email-form ') }}/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
