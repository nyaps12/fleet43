<!DOCTYPE html>
<html lang="en">

<head>

    <title>Dashboard</title>
    @include('layout.header')

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        @include('layout.logo')

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
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{$user->name}}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{$user->name}}</h6>
                            <span>Admin</span>
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
                <a class="nav-link " href="/">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-truck"></i><span>Vehicle's</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
            <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('vehicle.list') }}">
              <i class="bi bi-circle"></i><span>Vehicle List</span>
            </a>
          </li>
          <li>
            <a href="{{route('vehicle.add')}}">
              <i class="bi bi-circle"></i><span>Add Vehicle</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person-vcard"></i><span>Driver's</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('driver.list') }}">
                            <i class="bi bi-circle"></i><span>Driver's List</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('driver.add') }}" >
                            <i class="bi bi-circle"></i><span>Add Driver</span>
                        </a>
                    </li>
                </ul>

                <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav3" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-fuel-pump"></i><span>Fuel</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('fuel.manage') }}">
                            <i class="bi bi-circle"></i><span>Fuel Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('fuel.add') }}" >
                            <i class="bi bi-circle"></i><span>Add Fuel</span>
                        </a>
                    </li>
                </ul>

                <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav4" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-geo"></i><span>Tracking</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('location') }}">
                            <i class="bi bi-circle"></i><span>Live Location</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tracking') }}" >
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
                        <a href="{{ route('income-and-expenses') }}">
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
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Total Vehicle's </h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-truck"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Total Driver's</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-vcard"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>$3,264</h6>
                                            <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-3 col-md-6">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Customers <span>| This Year</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-3 col-md-6">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Today Trip's</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-calendar-day"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Reports -->
                        <div class="col-6">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Reports <span>/Today</span></h5>

                                    <!-- Line Chart -->
                                    <div id="reportsChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#reportsChart"), {
                                                series: [{
                                                    name: 'Sales',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'Revenue',
                                                    data: [11, 32, 45, 32, 34, 52, 41]
                                                }, {
                                                    name: 'Customers',
                                                    data: [15, 11, 32, 18, 9, 24, 11]
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                fill: {
                                                    type: "gradient",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Line Chart -->

                                </div>

                            </div>
                        </div><!-- End Reports -->

                        <!-- Recent Sales -->
                        <div class="col-6">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#">#2457</a></th>
                                                <td>Brandon Jacob</td>
                                                <td><a href="#" class="text-primary">At praesentium minu</a></td>
                                                <td>$64</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2147</a></th>
                                                <td>Bridie Kessler</td>
                                                <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                                                <td>$47</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2049</a></th>
                                                <td>Ashleigh Langosh</td>
                                                <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                                                <td>$147</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Angus Grady</td>
                                                <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                                                <td>$67</td>
                                                <td><span class="badge bg-danger">Rejected</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                                                <td>$165</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class="col-4">
                            <div class="card top-selling overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Sold</th>
                                                <th scope="col">Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                                <td>$64</td>
                                                <td class="fw-bold">124</td>
                                                <td>$5,828</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                                                <td>$46</td>
                                                <td class="fw-bold">98</td>
                                                <td>$4,508</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                                                <td>$59</td>
                                                <td class="fw-bold">74</td>
                                                <td>$4,366</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                                                <td>$32</td>
                                                <td class="fw-bold">63</td>
                                                <td>$2,016</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                                                <td>$79</td>
                                                <td class="fw-bold">41</td>
                                                <td>$3,239</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div><!-- End Top Selling -->

                        <!-- Top Selling -->
                        <div class="col-4">
                            <div class="card top-selling overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Sold</th>
                                                <th scope="col">Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                                <td>$64</td>
                                                <td class="fw-bold">124</td>
                                                <td>$5,828</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                                                <td>$46</td>
                                                <td class="fw-bold">98</td>
                                                <td>$4,508</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                                                <td>$59</td>
                                                <td class="fw-bold">74</td>
                                                <td>$4,366</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                                                <td>$32</td>
                                                <td class="fw-bold">63</td>
                                                <td>$2,016</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                                                <td>$79</td>
                                                <td class="fw-bold">41</td>
                                                <td>$3,239</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                        <!-- Top Selling -->
                        <div class="col-4">
                            <div class="card top-selling overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Sold</th>
                                                <th scope="col">Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                                <td>$64</td>
                                                <td class="fw-bold">124</td>
                                                <td>$5,828</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                                                <td>$46</td>
                                                <td class="fw-bold">98</td>
                                                <td>$4,508</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                                                <td>$59</td>
                                                <td class="fw-bold">74</td>
                                                <td>$4,366</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                                                <td>$32</td>
                                                <td class="fw-bold">63</td>
                                                <td>$2,016</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                                                <td>$79</td>
                                                <td class="fw-bold">41</td>
                                                <td>$3,239</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body pb-0">
                                    <h5 class="card-title">On Route <span>| Vehicles</span></h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Location</th>
                                                <th scope="col">STARTING ROUTE</th>
                                                <th scope="col">ENDING ROUTE</th>
                                                <th scope="col">WARNINGS</th>
                                                <th scope="col">PROGRESS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                            </tr>
                                            <tr>

                                            </tr>
                                            <tr>

                                            </tr>
                                            <tr>

                                            </tr>
                                            <tr>

                                            </tr>

                                        </tbody>
                                    </table>

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
