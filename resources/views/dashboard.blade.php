<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.2
 * @link http://coreui.io
 * Copyright (c) 2016 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
<!DOCTYPE html>
<html lang="IR-fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    @section('title')
        CMS Project
    @endsection
    @include('layouts.head')
</head>
<!-- BODY options, add following classes to body to change options
		1. 'compact-nav'     	  - Switch sidebar to minified version (width 50px)
		2. 'sidebar-nav'		  - Navigation on the left
			2.1. 'sidebar-off-canvas'	- Off-Canvas
				2.1.1 'sidebar-off-canvas-push'	- Off-Canvas which move content
				2.1.2 'sidebar-off-canvas-with-shadow'	- Add shadow to body elements
		3. 'fixed-nav'			  - Fixed navigation
		4. 'navbar-fixed'		  - Fixed navbar
	-->

<body class="navbar-fixed sidebar-nav fixed-nav">
@include('layouts.navbar')

@include('layouts.sidebar')
<!-- Main content -->
<main class="main">

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">خانه</li>
        <li class="breadcrumb-item"><a href="#">مدیریت</a>
        </li>
        <li class="breadcrumb-item active">داشبرد</li>

        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
                <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp;داشبرد</a>
                <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;تنظیمات</a>
            </div>
        </li>
    </ol>

    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-inverse card-primary">
                        <div class="card-block p-b-0">
                            <div class="btn-group pull-left">
                                <button type="button" class="btn btn-transparent active dropdown-toggle p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-settings"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <h4 class="m-b-0">9.823</h4>
                            <p>کاربر آنلاین</p>
                        </div>
                        <div class="chart-wrapper p-x-1" style="height:70px;">
                            <canvas id="card-chart1" class="chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-inverse card-info">
                        <div class="card-block p-b-0">
                            <button type="button" class="btn btn-transparent active p-a-0 pull-left">
                                <i class="icon-location-pin"></i>
                            </button>
                            <h4 class="m-b-0">9.823</h4>
                            <p>کاربر آنلاین</p>
                        </div>
                        <div class="chart-wrapper p-x-1" style="height:70px;">
                            <canvas id="card-chart2" class="chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-inverse card-warning">
                        <div class="card-block p-b-0">
                            <div class="btn-group pull-left">
                                <button type="button" class="btn btn-transparent active dropdown-toggle p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-settings"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <h4 class="m-b-0">9.823</h4>
                            <p>کاربر آنلاین</p>
                        </div>
                        <div class="chart-wrapper" style="height:70px;">
                            <canvas id="card-chart3" class="chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-inverse card-danger">
                        <div class="card-block p-b-0">
                            <div class="btn-group pull-left">
                                <button type="button" class="btn btn-transparent active dropdown-toggle p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-settings"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <h4 class="m-b-0">9.823</h4>
                            <p>کاربر آنلاین</p>
                        </div>
                        <div class="chart-wrapper p-x-1" style="height:70px;">
                            <canvas id="card-chart4" class="chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!--/col-->

            </div>
            <!--/row-->
        </div>

    </div>
    <!--/.container-fluid-->
</main>

<aside class="aside-menu">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="callout m-a-0 p-y-h text-muted text-xs-center bg-faded text-uppercase">
                <small><b>Today</b>
                </small>
            </div>
            <hr class="transparent m-x-1 m-y-0">
            <div class="callout callout-warning m-a-0 p-y-1">
                <div class="avatar pull-xs-right">
                    <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                </div>
                <div>Meeting with
                    <strong>Lucas</strong>
                </div>
                <small class="text-muted m-r-1"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA</small>
            </div>
            <hr class="m-x-1 m-y-0">
            <div class="callout callout-info m-a-0 p-y-1">
                <div class="avatar pull-xs-right">
                    <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                </div>
                <div>Skype with
                    <strong>Megan</strong>
                </div>
                <small class="text-muted m-r-1"><i class="icon-calendar"></i>&nbsp; 4 - 5pm</small>
                <small class="text-muted"><i class="icon-social-skype"></i>&nbsp; On-line</small>
            </div>
            <hr class="transparent m-x-1 m-y-0">
            <div class="callout m-a-0 p-y-h text-muted text-xs-center bg-faded text-uppercase">
                <small><b>Tomorrow</b>
                </small>
            </div>
            <hr class="transparent m-x-1 m-y-0">
            <div class="callout callout-danger m-a-0 p-y-1">
                <div>New UI Project -
                    <strong>deadline</strong>
                </div>
                <small class="text-muted m-r-1"><i class="icon-calendar"></i>&nbsp; 10 - 11pm</small>
                <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ</small>
                <div class="avatars-stack m-t-h">
                    <div class="avatar avatar-xs">
                        <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                    <div class="avatar avatar-xs">
                        <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                    <div class="avatar avatar-xs">
                        <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                    <div class="avatar avatar-xs">
                        <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                    <div class="avatar avatar-xs">
                        <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                </div>
            </div>
            <hr class="m-x-1 m-y-0">
            <div class="callout callout-success m-a-0 p-y-1">
                <div>
                    <strong>#10 Startups.Garden</strong>Meetup</div>
                <small class="text-muted m-r-1"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA</small>
            </div>
            <hr class="m-x-1 m-y-0">
            <div class="callout callout-primary m-a-0 p-y-1">
                <div>
                    <strong>Team meeting</strong>
                </div>
                <small class="text-muted m-r-1"><i class="icon-calendar"></i>&nbsp; 4 - 6pm</small>
                <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ</small>
                <div class="avatars-stack m-t-h">
                    <div class="avatar avatar-xs">
                        <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                    <div class="avatar avatar-xs">
                        <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                    <div class="avatar avatar-xs">
                        <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                    <div class="avatar avatar-xs">
                        <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                    <div class="avatar avatar-xs">
                        <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                    <div class="avatar avatar-xs">
                        <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                    <div class="avatar avatar-xs">
                        <img src="img/avatars/8.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                </div>
            </div>
            <hr class="m-x-1 m-y-0">
        </div>
        <div class="tab-pane p-a-1" id="messages" role="tabpanel">
            <div class="message">
                <div class="p-y-1 p-b-3 m-r-1 pull-left">
                    <div class="avatar">
                        <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status tag-success"></span>
                    </div>
                </div>
                <div>
                    <small class="text-muted">Lukasz Holeczek</small>
                    <small class="text-muted pull-left m-t-q">1:52 PM</small>
                </div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="p-y-1 p-b-3 m-r-1 pull-left">
                    <div class="avatar">
                        <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status tag-success"></span>
                    </div>
                </div>
                <div>
                    <small class="text-muted">Lukasz Holeczek</small>
                    <small class="text-muted pull-left m-t-q">1:52 PM</small>
                </div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="p-y-1 p-b-3 m-r-1 pull-left">
                    <div class="avatar">
                        <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status tag-success"></span>
                    </div>
                </div>
                <div>
                    <small class="text-muted">Lukasz Holeczek</small>
                    <small class="text-muted pull-right m-t-q">1:52 PM</small>
                </div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="p-y-1 p-b-3 m-r-1 pull-left">
                    <div class="avatar">
                        <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status tag-success"></span>
                    </div>
                </div>
                <div>
                    <small class="text-muted">Lukasz Holeczek</small>
                    <small class="text-muted pull-right m-t-q">1:52 PM</small>
                </div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="p-y-1 p-b-3 m-r-1 pull-left">
                    <div class="avatar">
                        <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status tag-success"></span>
                    </div>
                </div>
                <div>
                    <small class="text-muted">Lukasz Holeczek</small>
                    <small class="text-muted pull-right m-t-q">1:52 PM</small>
                </div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
        </div>
        <div class="tab-pane p-a-1" id="settings" role="tabpanel">
            <h6>Settings</h6>
            <div class="aside-options">
                <div class="clearfix m-t-2">
                    <small><b>Option 1</b>
                    </small>
                    <label class="switch switch-text switch-pill switch-success switch-sm pull-right">
                        <input type="checkbox" class="switch-input" checked>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                    </label>
                </div>
                <div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                </div>
            </div>
            <div class="aside-options">
                <div class="clearfix m-t-1">
                    <small><b>Option 2</b>
                    </small>
                    <label class="switch switch-text switch-pill switch-success switch-sm pull-right">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                    </label>
                </div>
                <div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                </div>
            </div>
            <div class="aside-options">
                <div class="clearfix m-t-1">
                    <small><b>Option 3</b>
                    </small>
                    <label class="switch switch-text switch-pill switch-success switch-sm pull-right">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                    </label>
                </div>
            </div>
            <div class="aside-options">
                <div class="clearfix m-t-1">
                    <small><b>Option 4</b>
                    </small>
                    <label class="switch switch-text switch-pill switch-success switch-sm pull-right">
                        <input type="checkbox" class="switch-input" checked>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                    </label>
                </div>
            </div>
            <hr>
            <h6>System Utilization</h6>
            <div class="text-uppercase m-b-q m-t-2">
                <small><b>CPU Usage</b>
                </small>
            </div>
            <progress class="progress progress-xs progress-info m-a-0" value="25" max="100">25%</progress>
            <small class="text-muted">348 Processes. 1/4 Cores.</small>
            <div class="text-uppercase m-b-q m-t-h">
                <small><b>Memory Usage</b>
                </small>
            </div>
            <progress class="progress progress-xs progress-warning m-a-0" value="70" max="100">70%</progress>
            <small class="text-muted">11444GB/16384MB</small>
            <div class="text-uppercase m-b-q m-t-h">
                <small><b>SSD 1 Usage</b>
                </small>
            </div>
            <progress class="progress progress-xs progress-danger m-a-0" value="95" max="100">95%</progress>
            <small class="text-muted">243GB/256GB</small>
            <div class="text-uppercase m-b-q m-t-h">
                <small><b>SSD 2 Usage</b>
                </small>
            </div>
            <progress class="progress progress-xs progress-success m-a-0" value="10" max="100">10%</progress>
            <small class="text-muted">25GB/256GB</small>
        </div>
    </div>
</aside>

@include('layouts.footer')
@include('layouts.js-scripts')
</body>

</html>
