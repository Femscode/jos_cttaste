<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>CTtaste | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="CTTASTE|API-USER" name="description" />
    <meta content="CTTASTE" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://cttaste.com/assets/images/fav_01.png">

    <!-- Bootstrap Css -->
    <link href="https://cttaste.com/public/api_user/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
    type="text/css" />
    <link href="{{ asset('api_user/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet"
    type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('api_user/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->

    <link href="https://cttaste.com/public/api_user/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('api_user/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <script src="{{asset('cdn/sweetalert.min.js')}}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('admin/cdn/jquery-3.6.0.js')}}" crossorigin="anonymous"></script>


    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('header')

</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="/" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('api_user/assets/images/logo.svg')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('assets/images/logo-wh.png')}}" alt="" height="30">
                            </span>
                        </a>

                        <a href="/" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('api_user/assets/images/logo-light.svg')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('assets/images/logo-wh.png')}}" alt="" height="30">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bx bx-search-alt"></span>
                        </div>
                    </form>


                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="bx bx-bell bx-tada"></i>
                            <span class="badge bg-danger rounded-pill">1</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                    </div>
                                    
                                    <div class="col-auto">
                                        <a href="#!" class="small" key="t-view-all"> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                {{-- <a href="" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="bx bx-map"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1" key="t-your-order">Introducing bicycle delivery soon!</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-grammer">For short distances, to reduce delivery fee.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                        key="t-min-ago">Learn more...</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a> --}}
                                <a href="javascript: void(0);" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3" style='width:80px'>
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="bx bx-store-alt"></i>
                                            </span>
                                        </div><div class="flex-grow-1">
                                            <h6 class="mb-1">Delivery tracking for your customers!</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-simplified">A new feature has been added that allows customers to track their orders.😉😊
                                                </p>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                {{-- <a href="javascript: void(0);" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3" style='width:50px'>
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="bx bx-badge-check"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1" key="t-shipped">New dashboard alert!</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-grammer">Introducing a more powerful, faster and user-friendly dashboard.</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </a> --}}

                               
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="/delivery_tracking">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">Go to tracking dashboard..</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if($user->image !== null)
                            @if(substr($user->image,0,5) == 'https')
                            <img class="rounded-circle header-profile-user"
                            src="{{ $user->image }}"
                            alt="Profile Pic">

                            @else

                            <img class="rounded-circle header-profile-user"
                                src="https://jos.cttaste.com/jos_files/public/profilePic/{{ $user->image }}"
                                alt="Profile Pic">
                            @endif
                            @else
                            <img src="assets/images/banner3.jpeg" alt="" class="rounded-circle header-profile-user">
                            @endif
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ $user->name }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="/manager_profile"><i
                                    class="bx bx-user font-size-16 align-middle me-1"></i>
                                <span>Profile</span></a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href='/logout' onclick='return confirm("Are you sure you want to logout?")'><i
                                    class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                    key="t-logout">Logout</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        
                        <li>
                            <a href="/dashboard" class="waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-dashboards">Dashboards</span>
                            </a>

                        </li>

                        <li>
                            <a href="/profile" class="">
                                <i class="bx bx-user-circle"></i>
                                <span key="t-layouts">Profile</span>
                            </a>

                        </li>
                        <li>
                            <a href="/category" class="">
                                <i class="bx bx-store-alt"></i>
                                <span key="t-layouts">Food Categories</span>
                            </a>

                        </li>
                        <li>
                            <a href="/working_hours" class="">
                                <i class="bx bx-time"></i>
                                <span key="t-layouts">Working Hours</span>
                            </a>

                        </li>
                        <li>
                            <a href="/food" class="">
                                <i class="bx bx-restaurant"></i>
                                <span key="t-layouts">Menus</span>
                            </a>

                        </li>
                        <li>
                            <a href="/today_orders" class="">
                                <i class="bx bx-cart"></i>
                                <span key="t-layouts">Today's Orders</span>
                            </a>

                        </li>
                        <li>
                            <a href="/orders" class="">
                                <i class="bx bx-cart"></i>
                                <span key="t-layouts">All Orders</span>
                            </a>

                        </li>
                        <li>
                            <a href="/records" class="">
                                <i class="bx bx-line-chart"></i>
                                <span key="t-layouts">Records</span>
                            </a>

                        </li>
                        <li>
                            <a href="/transactions" class="">
                                <i class="bx bx-money"></i>
                                <span key="t-layouts">Transactions</span>
                            </a>

                        </li>
                        <li>
                            <a href="/withdraw" class="">
                                <i class="bx bx-money"></i>
                                <span key="t-layouts">Withdraw Funds</span>
                            </a>

                        </li>
                        <li>
                            <a href="/delivery_locations" class="">
                                <i class="bx bx-map"></i>
                                <span key="t-layouts">Delivery Locations</span>
                            </a>

                        </li>
                        <li>
                            <a href="/delivery_tracking" class="">
                                <i class="bx bx-map"></i>
                                <span key="t-layouts">Delivery Tracking <span class="badge rounded-pill bg-success">New</span></span>
                            </a>

                        </li>
                        <li>
                            <a href="/checkreviews" class="">
                                <i class="bx bx-shocked"></i>
                                <span key="t-layouts">Customer's Review</span>
                            </a>

                        </li>
                        <li>
                            <a href="mailto:support@cttaste.com" class="">
                                <i class="bx bx-message"></i>
                                <span key="t-layouts">Contact Us</span>
                            </a>

                        </li>
                       
                        <li>
                            <a href="/logout" onclick='return confirm("Are you sure you want to log out?")'>
                                <i class="bx bx-log-out-circle"></i>
                                <span key="t-layouts">Logout</span>
                            </a>

                        </li>

                        {{-- <li class="menu-title" key="t-apps">Store</li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-store"></i>
                                <span key="t-ecommerce">Restaurants</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="calendar.html" key="t-tui-calendar">All Restaurants</a></li>
                                <li><a href="calendar-full.html" key="t-full-calendar">Create Restaurant</a></li>
                                <li><a href="calendar-full.html" key="t-full-calendar">Update Restaurant</a></li>
                            </ul>

                        </li>

                        <li class="menu-title" key="t-components">Components</li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bxs-bar-chart-alt-2"></i>
                                <span key="t-charts"> Component</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="calendar.html" key="t-tui-calendar">Categories</a></li>
                                <li><a href="calendar-full.html" key="t-full-calendar">Foods</a></li>
                                <li><a href="calendar-full.html" key="t-full-calendar">Orders</a></li>
                                <li><a href="calendar-full.html" key="t-full-calendar">Records</a></li>
                            </ul>
                        </li>
                        --}}


                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                @yield('content')

                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- Transaction Modal -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © CTTaste.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                A product of CTHostel
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('api_user/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('api_user/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('api_user/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('api_user/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('api_user/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{ asset('api_user/assets/js/pages/dashboard.init.js')}}"></script>
    <script src="{{ asset('api_user/assets/js/app.js')}}"></script>


    <script src="{{ asset('api_user/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('api_user/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('api_user/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('api_user/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}">
    </script>

    <script src="{{ asset('api_user/assets/js/pages/datatables.init.js')}}"></script>

    {{-- <script src='/assets/js/professionallocker.js'></script> --}}
    <script>
        $(document).ready(function() {
        var oTable = $('.datatable').DataTable({
            ordering: false,
            searching: true
            });  
        })
        var hashTable = $('#datatable').DataTable({
            ordering: false,
            searching: true
            });  
    
    </script>

    @yield('script')
</body>

</html>