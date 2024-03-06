<!DOCTYPE html>
<html lang="en">

<head>

    <title>Dashboard</title>
    @include('layout.header')

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
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

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
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
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="/">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-truck" ></i><span>Vehicle's</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('vehicle.list') }}">
                            <i class="bi bi-circle"></i><span>Vehicle List</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('vehicle.add') }}" class="active">
                            <i class="bi bi-circle"></i><span>Add Vehicle</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person-vcard"></i><span>Driver's</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav2" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('driver.list') }}">
                            <i class="bi bi-circle"></i><span>Driver's List</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('vehicle.add') }}">
                            <i class="bi bi-circle"></i><span>Add Driver</span>
                        </a>
                    </li>
                </ul>

                <li class="nav-item">
                <a class="nav-link collapse" data-bs-target="#components-nav3" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-fuel-pump"></i><span>Fuel</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav3" class="nav-content show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('fuel.manage') }}" >
                            <i class="bi bi-circle"></i><span>Fuel Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('fuel.add') }}" class="active"    >
                            <i class="bi bi-circle"></i><span>Add Fuel</span>
                        </a>
                    </li>
                </ul>

                <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav4" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-geo"></i><span>Tracking</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav4" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('location') }}">
                            <i class="bi bi-circle"></i><span>Live Location</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tracking') }}"   >
                            <i class="bi bi-circle"></i><span>Tracking History</span>
                        </a>
                    </li>
                </ul>   

                <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav5" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-clipboard-data"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav5" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('income-and-expenses') }}"    >
                            <i class="bi bi-circle"></i><span> Income & Expenses </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('fuel') }}" >
                            <i class="bi bi-circle"></i><span>Fuel</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->



        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Add Vehicle</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="container-fluid">


                                <div class="card">

                                    <div class="card-body pb-0">

                                        <h2 class="card-title">Add Vehicle</h2>

                                        <form action="" method="post">
                                            <div class="row justify-content-center">


                                                <div class="col-lg-3">

                                                    <div class="card-body">

                                                        <!-- Vertical Form -->

                                                        <div class="col-12 mb-3">
                                                            <label for="inputNanme4" class="form-label">Registration Number</label>
                                                            <input type="text" class="form-control" placeholder="Registration Number" id="inputNanme4">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="inputEmail4" class="form-label">Chassis No</label>
                                                            <input type="email" class="form-control" placeholder="Chassis No" id="inputEmail4">
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-3">

                                                    <div class="card-body">

                                                        <!-- Vertical Form -->

                                                        <div class="col-12 mb-3">
                                                            <label for="inputNanme4" class="form-label">Vehicle</label>
                                                            <input type="text" class="form-control" placeholder="Vehicle Name" id="inputNanme4">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="inputEmail4" class="form-label">Engine No</label>
                                                            <input type="email" class="form-control" placeholder="Engine No" id="inputEmail4">
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-3">

                                                    <div class="card-body">

                                                        <!-- Vertical Form -->

                                                        <div class="col-12 mb-3">
                                                            <label for="inputNanme4" class="form-label">Model</label>
                                                            <input type="text" class="form-control" placeholder="Model" id="inputNanme4">
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <label for="inputEmail4" class="form-label">Manufactured By</label>
                                                            <input type="email" class="form-control" placeholder="Manufactured By" id="inputEmail4">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="text" class="form-label">Registration Expiry Date</label>
                                                            <input type="text" class="form-control" placeholder="Registration Expiry Date" id="inputPassword4">
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </form>
                                        <div class="card-footer text-right d-flex">
                                            <div class="col-auto">
                                            <a href="$" class="btn btn-outline-primary">Add Vehicle</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Fleet Management</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('layout.footer')

</body>

</html>
