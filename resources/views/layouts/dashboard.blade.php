<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Adminox - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('backend') }}/images/favicon.ico">

        <!-- C3 charts css -->
        <link href="{{ asset('backend') }}/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

        <!-- App css -->
        <link href="{{ asset('backend') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend') }}/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend') }}/css/style.css" rel="stylesheet" type="text/css" />

        <script src="{{ asset('backend') }}/js/modernizr.min.js"></script>

    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                        <!--Adminox-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo_dark.png" alt="" height="24" class="logo-lg">
                            <img src="assets/images/logo_sm.png" alt="" height="24" class="logo-sm">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-inline float-right mb-0">

                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="badge badge-pink noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                        <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="#"><i class="fi-air-play"></i>Dashboard</a>
                                <ul class="submenu">
                                    <li><a href="index.html">Dashboard 1</a></li>
                                    <li><a href="dashboard-2.html">Dashboard 2</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fi-briefcase"></i>Admin UI</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li>
                                                <span>UI Kit</span>
                                            </li>
                                            <li><a href="ui-typography.html">Typography</a></li>
                                            <li><a href="ui-panels.html">Panels</a></li>
                                            <li><a href="ui-buttons.html">Buttons</a></li>
                                            <li><a href="ui-modals.html">Modals</a></li>
                                            <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                            <li><a href="ui-spinners.html">Spinners</a></li>
                                            <li><a href="ui-ribbons.html">Ribbons</a></li>
                                            <li><a href="ui-portlets.html">Portlets</a></li>
                                            <li><a href="ui-tabs.html">Tabs</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <span>UI Kit</span>
                                            </li>
                                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                            <li><a href="ui-notifications.html">Notification</a></li>
                                            <li><a href="ui-carousel.html">Carousel</a>
                                            <li><a href="ui-video.html">Video</a>
                                            <li><a href="ui-tooltips-popovers.html">Tooltips & Popovers</a></li>
                                            <li><a href="ui-images.html">Images</a></li>
                                            <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                            <li><a href="admin-grid.html">Grid</a></li>
                                            <li><a href="admin-sweet-alert.html">Sweet Alert</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <span>Admin UI</span>
                                            </li>
                                            <li><a href="admin-tiles.html">Tiles Box</a></li>
                                            <li><a href="admin-nestable.html">Nestable List</a></li>
                                            <li><a href="admin-rangeslider.html">Range Slider</a></li>
                                            <li><a href="admin-ratings.html">Ratings</a></li>
                                            <li><a href="admin-filemanager.html">File Manager</a></li>
                                            <li><a href="admin-lightbox.html">Lightbox</a></li>
                                            <li><a href="admin-scrollbar.html">Scroll bar</a></li>
                                            <li><a href="admin-slider.html">Slider</a></li>
                                            <li><a href="admin-treeview.html">Treeview</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fi-box"></i>Components</a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Icons</a>
                                        <ul class="submenu">
                                            <li><a href="icons-colored.html">Colored Icons</a></li>
                                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                            <li><a href="icons-feather.html">Feather Icons</a></li>
                                            <li><a href="icons-simple-line.html">Simple line Icons</a></li>
                                            <li><a href="icons-flags.html">Flag Icons</a></li>
                                            <li><a href="icons-file.html">File Icons</a></li>
                                            <li><a href="icons-pe7.html">PE7 Icons</a></li>
                                            <li><a href="icons-typicons.html">Typicons</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Graphs</a>
                                        <ul class="submenu">
                                            <li><a href="chart-flot.html">Flot Chart</a></li>
                                            <li><a href="chart-morris.html">Morris Chart</a></li>
                                            <li><a href="chart-google.html">Google Chart</a></li>
                                            <li><a href="chart-echart.html">Echarts</a></li>
                                            <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                            <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                            <li><a href="chart-c3.html">C3 Chart</a></li>
                                            <li><a href="chart-justgage.html">Justgage Charts</a></li>
                                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                            <li><a href="chart-knob.html">Jquery Knob</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Email</a>
                                        <ul class="submenu">
                                            <li><a href="email-inbox.html">Inbox</a></li>
                                            <li><a href="email-read.html">Read Email</a></li>
                                            <li><a href="email-compose.html">Compose Email</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Tables</a>
                                        <ul class="submenu">
                                            <li><a href="tables-basic.html">Basic Tables</a></li>
                                            <li><a href="tables-layouts.html">Tables Layouts</a></li>
                                            <li><a href="tables-datatable.html">Data Tables</a></li>
                                            <li><a href="tables-foo-tables.html">Foo Tables</a></li>
                                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                                            <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                            <li><a href="tables-editable.html">Editable Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Maps</a>
                                        <ul class="submenu">
                                            <li><a href="maps-google.html">Google Maps</a></li>
                                            <li><a href="maps-google-full.html">Full Google Map</a></li>
                                            <li><a href="maps-vector.html">Vector Maps</a></li>
                                            <li><a href="maps-mapael.html">Mapael Maps</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Apps</a>
                                        <ul class="submenu">
                                            <li><a href="apps-tickets.html">Tickets</a></li>
                                            <li><a href="apps-taskboard.html">Taskboard</a></li>
                                            <li><a href="apps-calendar.html">Calendar</a></li>
                                            <li><a href="apps-todo.html">Todo</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fi-paper"></i>Forms</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="form-elements.html">Form Elements</a></li>
                                            <li><a href="form-advanced.html">Form Advanced</a></li>
                                            <li><a href="form-layouts.html">Form Layouts</a></li>
                                            <li><a href="form-validation.html">Form Validation</a></li>
                                            <li><a href="form-pickers.html">Form Pickers</a></li>
                                            <li><a href="form-wizard.html">Form Wizard</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="form-mask.html">Form Masks</a></li>
                                            <li><a href="form-summernote.html">Summernote</a></li>
                                            <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                            <li><a href="form-typeahead.html">Typeahead</a></li>
                                            <li><a href="form-x-editable.html">X Editable</a></li>
                                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fi-paper-stack"></i>Pages</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="page-starter.html">Starter Page</a></li>
                                            <li><a href="page-login.html">Login</a></li>
                                            <li><a href="page-register.html">Register</a></li>
                                            <li><a href="page-logout.html">Logout</a></li>
                                            <li><a href="page-recoverpw.html">Recover Password</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                            <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                            <li><a href="page-404.html">Error 404</a></li>
                                            <li><a href="page-404-alt.html">Error 404-alt</a></li>
                                            <li><a href="page-500.html">Error 500</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fi-layers"></i>Extras</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="extras-about.html">About Us</a></li>
                                            <li><a href="extras-contact.html">Contact</a></li>
                                            <li><a href="extras-companies.html">Companies</a></li>
                                            <li><a href="extras-members.html">Members</a></li>
                                            <li><a href="extras-members-2.html">Membars 2</a></li>
                                            <li><a href="extras-timeline.html">Timeline</a></li>
                                            <li><a href="extras-invoice.html">Invoice</a></li>
                                            <li><a href="extras-maintenance.html">Maintenance</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                                            <li><a href="extras-faq.html">FAQ</a></li>
                                            <li><a href="extras-pricing.html">Pricing</a></li>
                                            <li><a href="extras-profile.html">Profile</a></li>
                                            <li><a href="extras-email-template.html">Email Templates</a></li>
                                            <li><a href="extras-search-result.html">Search Results</a></li>
                                            <li><a href="extras-sitemap.html">Site Map</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Adminox</a></li>
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Dashboard 1</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box widget-box-two widget-two-custom">
                            <i class="mdi mdi-currency-usd widget-two-icon"></i>
                            <div class="wigdet-two-content">
                                <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Revenue</p>
                                <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">65841</span></h2>
                                <p class="m-0">Jan - Apr 2017</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box widget-box-two widget-two-custom">
                            <i class="mdi mdi-account-multiple widget-two-icon"></i>
                            <div class="wigdet-two-content">
                                <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Unique Visitors</p>
                                <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">236521</span></h2>
                                <p class="m-0">Jan - Apr 2017</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box widget-box-two widget-two-custom">
                            <i class="mdi mdi-crown widget-two-icon"></i>
                            <div class="wigdet-two-content">
                                <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Number of Transactions</p>
                                <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">563698</span></h2>
                                <p class="m-0">Jan - Apr 2017</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box widget-box-two widget-two-custom">
                            <i class="mdi mdi-auto-fix widget-two-icon"></i>
                            <div class="wigdet-two-content">
                                <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Conversation Rate</p>
                                <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">2.07</span>%</h2>
                                <p class="m-0">Jan - Apr 2017</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Revenue Comparison</h4>

                            <div class="text-center">
                                <h5 class="font-normal text-muted">You have to pay</h5>
                                <h3 class="m-b-30"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 25643 <small>USD</small></h3>
                            </div>

                            <div class="chart-container">
                                <div class="" style="height:280px" id="platform_type_dates_donut"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Visitors Overview</h4>

                            <div class="text-center">
                                <h5 class="font-normal text-muted">You have to pay</h5>
                                <h3 class="m-b-30"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 5623 <small>USD</small></h3>
                            </div>

                            <div class="chart-container">
                                <div class="" style="height:280px" id="user_type_bar"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Goal Completion</h4>

                            <div class="text-center">
                                <h5 class="font-normal text-muted">You have to pay</h5>
                                <h3 class="m-b-30"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 12548 <small>USD</small></h3>
                            </div>

                            <div class="chart-container">
                                <div class="chart has-fixed-height" style="height:280px" id="page_views_today"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Recent Candidates</b></h4>
                            <p class="text-muted font-14 m-b-20">
                                Your awesome text goes here.
                            </p>

                            <div class="table-responsive">
                                <table class="table table-hover m-0 table-actions-bar">

                                    <thead>
                                    <tr>
                                        <th>
                                            <div class="btn-group dropdown">
                                                <button type="button" class="btn btn-secondary btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                                </div>
                                            </div>
                                        </th>
                                        <th>Name</th>
                                        <th>Location</th>
                                        <th>Job Timing</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-b-0 m-t-0 font-600">Tomaslau</h5>
                                            <p class="m-b-0"><small>Web Designer</small></p>
                                        </td>

                                        <td>
                                            <i class="mdi mdi-map-marker text-primary"></i> New York
                                        </td>

                                        <td>
                                            <i class="mdi mdi-clock text-success"></i> Full Time
                                        </td>

                                        <td>
                                            <i class="mdi mdi-currency-usd text-warning"></i> 3265
                                        </td>

                                        <td>
                                            <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                            <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-b-0 m-t-0 font-600">Erwin E. Brown</h5>
                                            <p class="m-b-0"><small>Programmer</small></p>
                                        </td>

                                        <td>
                                            <i class="mdi mdi-map-marker text-primary"></i> California
                                        </td>

                                        <td>
                                            <i class="mdi mdi-clock text-success"></i> Part Time
                                        </td>

                                        <td>
                                            <i class="mdi mdi-currency-usd text-warning"></i> 1365
                                        </td>

                                        <td>
                                            <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                            <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/avatar-4.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-b-0 m-t-0 font-600">Margeret V. Ligon</h5>
                                            <p class="m-b-0"><small>Web Designer</small></p>
                                        </td>

                                        <td>
                                            <i class="mdi mdi-map-marker text-primary"></i> New York
                                        </td>

                                        <td>
                                            <i class="mdi mdi-clock text-success"></i> Full Time
                                        </td>

                                        <td>
                                            <i class="mdi mdi-currency-usd text-warning"></i> 115248
                                        </td>

                                        <td>
                                            <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                            <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-b-0 m-t-0 font-600">Jose D. Delacruz</h5>
                                            <p class="m-b-0"><small>Web Developer</small></p>
                                        </td>

                                        <td>
                                            <i class="mdi mdi-map-marker text-primary"></i> New York
                                        </td>

                                        <td>
                                            <i class="mdi mdi-clock text-success"></i> Part Time
                                        </td>

                                        <td>
                                            <i class="mdi mdi-currency-usd text-warning"></i> 2451
                                        </td>

                                        <td>
                                            <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                            <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="assets/images/users/avatar-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-b-0 m-t-0 font-600">Luke J. Sain</h5>
                                            <p class="m-b-0"><small>Web Designer</small></p>
                                        </td>

                                        <td>
                                            <i class="mdi mdi-map-marker text-primary"></i> Australia
                                        </td>

                                        <td>
                                            <i class="mdi mdi-clock text-success"></i> Part Time
                                        </td>

                                        <td>
                                            <i class="mdi mdi-currency-usd text-warning"></i> 3265
                                        </td>

                                        <td>
                                            <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                            <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- end col -->

                    <div class="col-lg-3">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Total Unique Visitors</h4>

                            <div class="widget-chart text-center">

                                <div id="donut-chart" style="height: 270px;"></div>

                                <div class="row text-center m-t-30">
                                    <div class="col-6">
                                        <h3 data-plugin="counterup">1,507</h3>
                                        <p class="text-muted m-b-5">Visitors Male</p>
                                    </div>
                                    <div class="col-6">
                                        <h3 data-plugin="counterup">854</h3>
                                        <p class="text-muted m-b-5">Visitors Female</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-3">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Number of Transactions</h4>

                            <div class="widget-chart text-center">

                                <div id="pie-chart" style="height: 270px;"></div>

                                <div class="row text-center m-t-30">
                                    <div class="col-6">
                                        <h3 data-plugin="counterup">2,854</h3>
                                        <p class="text-muted m-b-5">Payment Done</p>
                                    </div>
                                    <div class="col-6">
                                        <h3 data-plugin="counterup">22</h3>
                                        <p class="text-muted m-b-5">Payment Due</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!--- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        2017 ?? Adminox - Coderthemes.com
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="{{ asset('backend') }}/js/jquery.min.js"></script>
        <script src="{{ asset('backend') }}/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="{{ asset('backend') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('backend') }}/js/waves.js"></script>
        <script src="{{ asset('backend') }}/js/jquery.slimscroll.js"></script>
        <script src="{{ asset('backend') }}/js/jquery.scrollTo.min.js"></script>

        <!-- Counter js  -->
        <script src="{{ asset('backend') }}/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="{{ asset('backend') }}/plugins/counterup/jquery.counterup.min.js"></script>

        <!--C3 Chart-->
        <script type="text/javascript" src="{{ asset('backend') }}/plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="{{ asset('backend') }}/plugins/c3/c3.min.js"></script>

        <!--Echart Chart-->
        <script src="{{ asset('backend') }}/plugins/echart/echarts-all.js"></script>

        <!-- Dashboard init -->
        <script src="{{ asset('backend') }}/pages/jquery.dashboard.js"></script>

        

        <!-- App js -->
        <script src="{{ asset('backend') }}/js/jquery.core.js"></script>
        <script src="{{ asset('backend') }}/js/jquery.app.js"></script>

    </body>
</html>
