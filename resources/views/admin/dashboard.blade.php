<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Playmor admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Playmor admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset("/assetsAdmin/images/favicon.png") }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset("/assetsAdmin/images/favicon.png") }}" type="image/x-icon">
    <title>
        @yield('title')
    </title>
 
    <!-- Google font-->
    
    <link href="{{ asset("/../../css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap") }}" rel="stylesheet">
      <!-- jquery-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("/assetsAdmin/css/vendors/font-awesome.css") }}">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{ asset("/assetsAdmin/css/linearicon.css") }}">

    <!-- Themify icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("/assetsAdmin/css/vendors/themify.css") }}">
    
    <!-- Feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("/assetsAdmin/css/vendors/feather-icon.css") }}">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("/assetsAdmin/css/remixicon.css") }}">

    <!-- Data Table css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("/assetsAdmin/css/datatables.css") }}">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("/assetsAdmin/css/vendors/scrollbar.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("/assetsAdmin/css/vendors/animate.css") }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("/assetsAdmin/css/vendors/bootstrap.css") }}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("/assetsAdmin/css/style.css") }}">
    
</head>

<body>
    <!-- tap on top start-->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper m-0">
                <div class="header-logo-wrapper p-0">
                    <div class="logo-wrapper">
                        <a href="{{ route('home') }}" class="web-logo nav-logo" style="color:white">
                            <!-- <img src="../assets/images/logo/4.png" width="100px" height="100px"> -->
                            PlayMore
                        </a>
                    </div>
                    
                </div>

                
                <div class="nav-right col-6 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <span class="header-search">
                                <i class="ri-search-line"></i>
                            </span>
                        </li>
                        

                        <li>
                            <div class="mode">
                                <i class="ri-moon-line"></i>
                            </div>
                        </li>
                        <li class="profile-nav onhover-dropdown pe-0 me-0">
                            <div class="media profile-media">
                                <img class="user-profile rounded-circle" src="{{ asset('storage/' . Auth::user()->image_utilisateur) }}" alt="">
                                <div class="user-name-hide media-body">
                                    <span>{{ Auth::user()->prenom_utilisateur }} {{ Auth::user()->nom_utilisateur }}</span>
                                    <p class="mb-0 font-roboto">{{ Auth::user()->identifiant_utilisateur }}<i class="middle ri-arrow-down-s-line"></i></p>
                                </div>
                            </div>
                            
                            
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a href="{{ route("admin.users") }}">
                                        <i data-feather="users"></i>
                                        <span>Users</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route("admin.orders") }}">
                                        <i data-feather="archive"></i>
                                        <span>Orders</span>
                                    </a>
                                </li>
                                
                                
                                <li>
                                    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#">
                                        <i data-feather="log-out"></i>
                                        <span>Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div id="sidebarEffect"></div>
                <div>
                    <div class="logo-wrapper logo-wrapper-center">
                        <a href="{{ route('home') }}" class="web-logo nav-logo h2" style="color:white">
                            <!-- <img src="../assets/images/logo/4.png" width="100px" height="100px"> -->
                            PlayMore
                        </a>
                        <div class="back-btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="toggle-sidebar">
                            <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="{{ route('home') }}" class="web-logo nav-logo" style="color:white">
                            <!-- <img src="../assets/images/logo/4.png" width="100px" height="100px"> -->
                            PlayMore
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>

                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"></li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url("/admin/dashboard/products") }}">
                                        <i class="ri-home-line"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="#">
                                        <i class="ri-store-3-line"></i>
                                        <span>Product</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('admin.products')}}">Products</a>
                                        </li>

                                        <li>
                                            <a href="{{route('admin.product.add')}}">Add New Products</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.products.deleted')}}">Restore Products</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="#">
                                        <i class="ri-list-check-2"></i>
                                        <span>Category</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{ route('admin.categories') }}">Category List</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('admin.category.add') }}">Add New Category</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.category.deleted')}}">Restore Categories</a>
                                        </li>
                                    </ul>
                                </li>

                               

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="#">
                                        <i class="ri-user-3-line"></i>
                                        <span>Users</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{ route("admin.users") }}">All users</a>
                                        </li>
                                        
                                    </ul>
                                </li>


                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="#">
                                        <i class="ri-archive-line"></i>
                                        <span>Orders</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{ route("admin.orders") }}">Order List</a>
                                        </li>
                                        <li>
                                            <a href="{{ route("admin.factures") }}">Facture List</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="#">
                                        <i class="ri-list-settings-line"></i>
                                        <span>Properties</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{ route("admin.properties") }}">Properties</a>
                                        </li>

                                        <li>
                                            <a href="{{ route("admin.property.add") }}">Add Property</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="#">
                                        <i class="ri-list-settings-line"></i>
                                        <span>Tags</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{ route("admin.tags") }}">Tags</a>
                                        </li>

                                        <li>
                                            <a href="{{ route("admin.tag.add") }}">Add tag</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="#">
                                        <i class="ri-contacts-line"></i>

                                        <span>Contacts</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{ route("admin.mails") }}">Contact</a>
                                        </li>

                                        
                                    </ul>
                                </li>


                            </ul>
                        </div>

                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
           
            <!-- Page content starts-->
            @yield('content')
            <!-- Page content Ends-->

            
            
        </div>
    </div>
    <!-- page-wrapper End-->

    <!-- Modal logout Start -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                    <p>Are you sure you want to log out?</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
                    <div class="button-box">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
                            <button type="submit" class="btn btn--yes btn-primary">Yes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal End -->


 

   

    <!-- latest js -->
    <script src="{{ asset("/assetsAdmin/js/jquery-3.6.0.min.js") }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset("/assetsAdmin/js/bootstrap/bootstrap.bundle.min.js") }}"></script>

    <!-- feather icon js -->
    <script src="{{ asset("/assetsAdmin/js/icons/feather-icon/feather.min.js") }}"></script>
    <script src="{{ asset("/assetsAdmin/js/icons/feather-icon/feather-icon.js") }}"></script>

    <!-- scrollbar simplebar js -->
    <script src="{{ asset("/assetsAdmin/js/scrollbar/simplebar.js") }}"></script>
    <script src="{{ asset("/assetsAdmin/js/scrollbar/custom.js") }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset("/assetsAdmin/js/config.js") }}"></script>

    <!-- customizer js -->
    <script src="{{ asset("/assetsAdmin/js/customizer.js") }}"></script>

    <!-- Plugins js -->
    <script src="{{ asset("/assetsAdmin/js/sidebar-menu.js") }}"></script>
    <script src="{{ asset("/assetsAdmin/js/notify/bootstrap-notify.min.js") }}"></script>
    <script src="{{ asset("/assetsAdmin/js/notify/index.js") }}"></script>

    <!-- Data table js -->
    <script src="{{ asset("/assetsAdmin/js/jquery.dataTables.js") }}"></script>
    <script src="{{ asset("/assetsAdmin/js/custom-data-table.js") }}"></script>

    <!-- sidebar effect -->
    <script src="{{ asset("/assetsAdmin/js/sidebareffect.js") }}"></script>

    <!-- Theme js -->
    <script src="{{ asset("/assetsAdmin/js/script.js") }}"></script>
</body>

</html>