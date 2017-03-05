<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Panel</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="description" content="Paper - Material Admin Theme">
	<meta name="author" content="KaijuThemes">

	<link rel="shortcut icon" href="admin/img/logo-icon-dark.png">

	<link type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>
	<link type='text/css'  href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">

	<link href="admin/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">        <!-- Font Awesome -->
	<link href="admin/css/styles.css" type="text/css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

	<link href="admin/plugins/codeprettifier/prettify.css" type="text/css" rel="stylesheet">                <!-- Code Prettifier -->

	<link href="admin/plugins/dropdown.js/jquery.dropdown.css" type="text/css" rel="stylesheet">            <!-- iCheck -->
	<link href="admin/plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">                   <!-- Skylo -->

	<!--[if lt IE 10]>
	<script src="admin/js/media.match.min.js"></script>
	<script src="admin/js/respond.min.js"></script>
	<script src="admin/js/placeholder.min.js"></script>
	<![endif]-->
	<!-- The following CSS are included as plugins and can be removed if unused-->

	<link href="admin/plugins/form-daterangepicker/daterangepicker-bs3.css" type="text/css" rel="stylesheet">    <!-- DateRangePicker -->
	<link href="admin/plugins/fullcalendar/fullcalendar.css" type="text/css" rel="stylesheet">                   <!-- FullCalendar -->
	<link href="admin/plugins/jvectormap/jquery-jvectormap-2.0.2.css" type="text/css" rel="stylesheet">
	<link href="admin/less/card.less" type="text/css" rel="stylesheet">

	<link href="admin/plugins/chartist/dist/chartist.min.css" type="text/css" rel="stylesheet"> <!-- chartist -->
		@yield('stylesheets')

</head>

<body class="animated-content infobar-overlay">


<header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">
	<!-- <div id="page-progress-loader" class="show"></div> -->

	<div class="logo-area">
		<a class="navbar-brand navbar-brand-primary" href="index.html">
			<img class="show-on-collapse img-logo-white" alt="Paper" src="admin/img/logo-icon-white.png">
			<img class="show-on-collapse img-logo-dark" alt="Paper" src="admin/img/logo-icon-dark.png">
			<img class="img-white" alt="Paper" src="admin/img/logo-white.png">
			<img class="img-dark" alt="Paper" src="admin/img/logo-dark.png">
		</a>

		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg stay-on-search">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="material-icons">menu</i>
				</span>
			</a>
		</span>
		<span id="trigger-search" class="toolbar-trigger toolbar-icon-bg ov-h">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="material-icons">search</i>
				</span>
			</a>
		</span>
		<div id="search-box">
			<input class="form-control" type="text" placeholder="Search..." id="search-input"></input>
		</div>
	</div><!-- logo-area -->

	<ul class="nav navbar-nav toolbar pull-right">

		<li class="toolbar-icon-bg appear-on-search ov-h" id="trigger-search-close">
			<a class="toggle-fullscreen"><span class="icon-bg">
	        	<i class="material-icons">close</i>
	        </span></i></a>
		</li>
		<li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
			<a href="#" class="toggle-fullscreen"><span class="icon-bg">
	        	<i class="material-icons">fullscreen</i>
	        </span></i></a>
		</li>

		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="material-icons">notifications</i></span><span class="badge badge-info"></span></a>
			<div class="dropdown-menu animated notifications">
				<div class="topnav-dropdown-header">
					<span>3 new notifications</span>

				</div>
				<div class="scroll-pane">
					<ul class="media-list scroll-content">
						<li class="media notification-success">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="material-icons">lock</i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Privacy settings have been changed.</h4>
									<span class="notification-time">8 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-info">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="material-icons">shopping_cart</i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">A new order has been placed.</h4>
									<span class="notification-time">24 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-teal">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="material-icons">perm_contact_calendar</i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">New event started!</h4>
									<span class="notification-time">16 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-indigo">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="material-icons">settings</i></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">New app settings updated.</h4>
									<span class="notification-time">2 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-danger">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="material-icons">comment</i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Jessi commented your post.</h4>
									<span class="notification-time">4 days ago</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="#">See all notifications</a>
				</div>
			</div>
		</li>

		<li class="dropdown toolbar-icon-bg hidden-xs">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="material-icons">mail</i></span><span
						class="badge badge-info"></span></a>
			<div class="dropdown-menu animated notifications">
				<div class="topnav-dropdown-header">
					<span>2 new messages</span>

				</div>
				<div class="scroll-pane">
					<ul class="media-list scroll-content">
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="admin/demo/avatar/avatar_01.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Amy Green</strong> <span class="text-gray">‒ Integer vitae libero ac risus egestas placerat.</span></h4>
									<span class="notification-time">2 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="admin/demo/avatar/avatar_09.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Daniel Andrews</strong> <span class="text-gray">‒ Vestibulum commodo felis quis tortor</span></h4>
									<span class="notification-time">40 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="admin/demo/avatar/avatar_02.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Jane Simpson</strong> <span class="text-gray">‒ Fusce lobortis lorem at ipsum semper sagittis.</span></h4>
									<span class="notification-time">6 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="admin/demo/avatar/avatar_03.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Harold Hawkins</strong> <span class="text-gray">‒ Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</span></h4>
									<span class="notification-time">8 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="admin/demo/avatar/avatar_04.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Brian Fisher</strong> <span class="text-gray">‒ Praesent dapibus, neque id cursus faucibus.</span></h4>
									<span class="notification-time">16 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="admin/demo/avatar/avatar_05.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Dylan Black</strong> <span class="text-gray">‒ Pellentesque fermentum dolor. </span></h4>
									<span class="notification-time">2 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="admin/demo/avatar/avatar_06.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Bobby Harper</strong> <span class="text-gray">‒ Sed adipiscing ornare risus. Morbi est est.</span></h4>
									<span class="notification-time">4 days ago</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="#">See all messages</a>
				</div>
			</div>
		</li>

		<li class="toolbar-icon-bg" id="trigger-infobar">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="material-icons">more_vert</i>
				</span>
			</a>
		</li>

	</ul>

</header>

<div id="wrapper">
	<div id="layout-static">
		<div class="static-sidebar-wrapper sidebar-blue">
			<div class="static-sidebar">
				<div class="sidebar">
					<div class="widget" id="widget-profileinfo">
						<div class="widget-body">
							<div class="userinfo ">
								<div class="avatar pull-left">
									<img src="admin/demo/avatar/avatar_15.png" class="img-responsive img-circle">
								</div>
								<div class="info">
									<span class="username">{{Auth::user()->name}}</span>
									<span class="useremail">{{Auth::user()->email}}</span>
								</div>

								<div class="acct-dropdown clearfix dropdown">
									<span class="pull-left"><span class="online-status online"></span>Online</span>
									<!-- <span class="pull-right dropdown-toggle" data-toggle="dropdown"><a href="javascript:void(0)" class="btn btn-fab-caret btn-xs btn-fab"><i class="material-icons">arrow_drop_down</i><div class="ripple-container"></div></a></span>
                                    <ul class="dropdown-menu">
                                        <li><span class="online-status online"></span> Online</li>
                                        <li><span class="online-status online"></span> Online</li>
                                        <li><span class="online-status online"></span> Online</li>
                                        <li><span class="online-status online"></span> Online</li>
                                    </ul> -->
								</div>
							</div>
						</div>
					</div>
					<div class="widget stay-on-collapse" id="widget-sidebar">
						<nav role="navigation" class="widget-body">
							<ul class="acc-menu">
								<li class="nav-separator"><span>Navigation</span></li>
								<li><a  class="withripple" href="index.html"><span class="icon"><i class="material-icons">home</i></span><span>Dashboard</span><span class="badge badge-teal">2</span></a></li>
								<li><a  class="withripple" href="#"><span class="icon"><i class="material-icons">code</i></span><span>P</span></a></li>
								<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">flash_on</i></span><span>Layout</span></a>
									<ul class="acc-menu">
										<li><a  class="withripple" href="layout-grids.html">Grid Scaffolding</a></li>

									</ul>
								</li>

								<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">settings</i></span><span>UI Kit</span></a>
									<ul class="acc-menu">
										<li><a  class="withripple" href="ui-imagecarousel.html">Images &amp; Carousel</a></li>
									</ul>
								</li>

								<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">shuffle</i></span><span>Components</span></a>
									<ul class="acc-menu">
										<li><a  class="withripple" href="custom-list.html">Lists</a></li>

									</ul>
								</li>

								<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">create</i></span><span>Forms</span></a>
									<ul class="acc-menu">
										<li><a  class="withripple" href="form-gridforms.html">Grid Forms</a></li>
									</ul>
								</li>

								<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">apps</i></span><span>Tables</span></a>
									<ul class="acc-menu">
										<li><a  class="withripple" href="{{url('admin/participants')}}">Participants</a></li>
										<li><a  class="withripple" href="admin/assignments">Assignments</a></li>
										<li><a  class="withripple" href="admin/orders">Orders</a></li>
									</ul>
								</li>

								<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">show_chart</i></span><span>Analytics</span></a>
									<ul class="acc-menu">
										<li><a  class="withripple" href="charts-flot.html">Flot</a></li>
										<li><a  class="withripple" href="charts-sparklines.html">Sparklines</a></li>
										<li><a  class="withripple" href="charts-chartist.html">Chartist</a></li>
										<li><a  class="withripple" href="charts-nvd3.html">NVD3</a></li>
										<li><a  class="withripple" href="charts-easypiechart.html">Easy Pie Chart</a></li>
									</ul>
								</li>

								<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">map</i></span><span>Maps</span></a>
									<ul class="acc-menu">
										<li><a  class="withripple" href="maps-google.html">Google Maps</a></li>
										<li><a  class="withripple" href="maps-jvectormap.html">jVector Maps</a></li>
										<li><a  class="withripple" href="maps-mapael.html">Mapael</a></li>
									</ul>
								</li>

								<li class="nav-separator"><span>Extras</span></li>

								<li><a  class="withripple" href="extras-calendar.html"><span class="icon"><i class="material-icons">event_note</i></span><span>Calendar</span></a></li>
								<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">pages</i></span><span>Pages</span></a>
									<ul class="acc-menu">
										<li><a  class="withripple" href="extras-profile.html">Profile</a></li>
										<li><a  class="withripple" href="extras-invoice.html">Invoice</a></li>
										<li><a  class="withripple" href="coming-soon.html">Coming Soon</a></li>
										<li><a  class="withripple" href="extras-login.html">Login</a></li>
										<li><a  class="withripple" href="extras-forgotpassword.html">Password Recovery</a></li>
										<li><a  class="withripple" href="extras-registration.html">Registration</a></li>
										<li><a  class="withripple" href="extras-forgotpassword.html">Password Reset</a></li>
									</ul>
								</li>
								<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">email</i></span><span>Inbox</span></a>
									<ul class="acc-menu">
										<li><a  class="withripple" href="app-inbox.html">All</a></li>
										<li><a  class="withripple" href="app-inbox-read.html">Read</a></li>
										<li><a  class="withripple" href="app-inbox-compose.html">Compose</a></li>
									</ul>
								</li>
								<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">folder</i></span><span>Sub Menu</span></a>
									<ul class="acc-menu">
										<li><a  class="withripple" href="javascript:;"><span>Aliquam</span></a>
											<ul class="acc-menu">
												<li><a href="#" class="withripple" href="">Integer</a></li>
												<li><a href="#" class="withripple" href="">Ut Aliqum</a></li>
												<li><a href="#" class="withripple" href="">Cras Isculis</a></li>
											</ul>
										</li>
										<li><a href="#" class="withripple" href="javascript:;">Vestibulum</a></li>
										<li><a href="#" class="withripple" href="javascript:;">Praesent</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="static-content-wrapper">
			@yield('content')
		</div>

			<footer role="contentinfo">
				<div class="clearfix">
					<ul class="list-unstyled list-inline pull-left">
						<li><h6 style="margin: 0;">&copy; 2016 KaijuThemes</h6></li>
					</ul>
				</div>
			</footer>

		</div>
	</div>
</div>

<div class="infobar-wrapper scroll-pane">
	<div class="infobar scroll-content">


		<ul class="nav nav-tabs material-nav-tabs stretch-tabs icon-tabs">
			<li ><a href="#tab-7-1" data-toggle="tab">
					<i class="material-icons">settings</i>
				</a></li>
			<li class="active "><a href="#tab-7-2" data-toggle="tab"><span class="step size-64">
                  <i class="material-icons">textsms</i>
                </span></a>
			</li>
		</ul>


		<div class="tab-content">
			<div class="tab-pane" id="tab-7-1">

				<table class="table table-settings">
					<tbdody>
						<tr>
							<td>
								<h5>Alerts</h5>
								<p>Sets alerts to get notified when changes occur to get new alerming items</p>
							</td>
							<td><span class="togglebutton toggle-info"><label><input type="checkbox"> </label></span></td>
						</tr>
						<tr>
							<td>
								<h5>Notifications</h5>
								<p>You will receive notification email for any notifications if you set notification</p>
							</td>
							<td><span class="togglebutton toggle-primary"><label><input type="checkbox" class="toggle"  checked=""> </label></span></td>
						</tr>
						<tr>
							<td>
								<h5>Messages</h5>
								<p>You will receive notification on email after setting messages notifications</p>
							</td>
							<td>
								<span class="togglebutton toggle-danger"><label><input type="checkbox" > </label></span>
							</td>
						</tr>
						<tr>
							<td>
								<h5>Warnings</h5>
								<p>You will get warnning only some specific setttings or alert system</p>
							</td>
							<td>
								<span class="togglebutton toggle-warning"><label><input type="checkbox" checked=""> </label></span>
							</td>
						</tr>
						<tr>
							<td>
								<h5>Sidebar</h5>
								<p>You can hide/show use with sidebar collapsw settings</p>
							</td>
							<td><span class="togglebutton toggle-success"><label><input type="checkbox" checked=""> </label></span></td>
						</tr>
					</tbdody>
				</table>

			</div>
			<div class="tab-pane active" id="tab-7-2">

				<div class="widget">
					<div class="widget-heading">Recent Activities</div>
					<div class="widget-body">
						<ul class="timeline">
							<li class="timeline-purple">
								<div class="timeline-icon"><i class="material-icons">add</i></div>
								<div class="timeline-body">
									<div class="timeline-header">
										<span class="author">Jana Pena is now Follwing you</span>
										<span class="date">2 min ago</span>
									</div>
								</div>
							</li>
							<li class="timeline-primary">
								<div class="timeline-icon"><i class="material-icons">textsms</i></div>
								<div class="timeline-body">
									<div class="timeline-header">
										<span class="author">Percy liaye Like your picture</span>
										<span class="date">6 min ago</span>
									</div>
								</div>
							</li>
							<li class="timeline-green">
								<div class="timeline-icon"><i class="material-icons">done</i></div>
								<div class="timeline-body">
									<div class="timeline-header">
										<span class="author">Leon miles make your presentation for new project</span>
										<span class="date">2 hours ago</span>
									</div>
								</div>
							</li>
							<li class="timeline-danger">
								<div class="timeline-icon"><i class="material-icons">favorite</i></div>
								<div class="timeline-body">
									<div class="timeline-header">
										<span class="author">Lake wile like your comment</span>
										<span class="date">5 hours ago</span>
									</div>
								</div>
							</li>
							<li class="timeline-sky">
								<div class="timeline-icon"><i class="material-icons">attach_money</i></div>
								<div class="timeline-body">
									<div class="timeline-header">
										<span class="author">The Mountain Ambience paid your payment</span>
										<span class="date">9 hours ago</span>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="widget">
					<div class="widget-heading">Contacts</div>
					<div class="widget-body">
						<ul class="media-list contacts">
							<li class="media notification-message">
								<div class="media-left">
									<img class="img-circle avatar" src="admin/demo/avatar/avatar_01.png" alt="" />
								</div>
								<div class="media-body">
									<span class="text-gray">Jon Owens</span>
									<span class="contact-status text-success">Online</span>
								</div>
							</li>
							<li class="media notification-message">
								<div class="media-left">
									<img class="img-circle avatar" src="admin/demo/avatar/avatar_02.png" alt="" />
								</div>
								<div class="media-body">
									<span class="text-gray">Nina Huges</span>
									<span class="contact-status text-muted">Offline</span>
								</div>
							</li>
							<li class="media notification-message">
								<div class="media-left">
									<img class="img-circle avatar" src="admin/demo/avatar/avatar_03.png" alt="" />
								</div>
								<div class="media-body">
									<span class="text-gray">Austin Lee</span>
									<span class="contact-status text-danger">Busy</span>
								</div>
							</li>
							<li class="media notification-message">
								<div class="media-left">
									<img class="img-circle avatar" src="admin/demo/avatar/avatar_04.png" alt="" />
								</div>
								<div class="media-body">
									<span class="text-gray">Grady Hines</span>
									<span class="contact-status text-warning">Away</span>
								</div>
							</li>
							<li class="media notification-message">
								<div class="media-left">
									<img class="img-circle avatar" src="admin/demo/avatar/avatar_06.png" alt="" />
								</div>
								<div class="media-body">
									<span class="text-gray">Adrian Barton</span>
									<span class="contact-status text-success">Online</span>
								</div>
							</li>
						</ul>
					</div>
				</div>


			</div>
		</div>

	</div>

</div>
</div>


<!-- Das FAB -->
<button class="btn btn-primary btn-fab demo-switcher-fab" data-toggle="tooltip" data-placement="top" title="Click for Settings"><i class="material-icons">settings</i></button>

<!-- Switcher -->
<div class="demo-options">
	<div class="demo-body">
		<div class="tabular">
			<div class="tabular-row">
				<div class="tabular-cell">Fixed Header</div>
				<div class="tabular-cell demo-switches text-right">
					<div class="togglebutton checkbox-primary">
						<label>
							<input type="checkbox" name="demo-fixedheader" />
						</label>
					</div>
				</div>
			</div>
			<div class="tabular-row">
				<div class="tabular-cell">Boxed Layout</div>
				<div class="tabular-cell demo-switches text-right">
					<div class="togglebutton toggle-primary">
						<label>
							<input type="checkbox" name="demo-layoutboxed">
						</label>
					</div>
				</div>
			</div>
			<div class="tabular-row">
				<div class="tabular-cell">Collapse Leftbar</div>
				<div class="tabular-cell demo-switches text-right">
					<div class="togglebutton toggle-primary">
						<label>
							<input type="checkbox" name="demo-collapseleftbar">
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="demo-body">
		<div class="option-title">Brand</div>
		<ul id="demo-header-color" class="demo-color-list">
			<li><span data-addclass="navbar-brand-default" class="brand-switcher demo-default"></span></li>
			<li><span data-addclass="navbar-brand-primary" class="brand-switcher demo-primary"></span></li>
			<li><span data-addclass="navbar-brand-success" class="brand-switcher demo-success"></span></li>
			<li><span data-addclass="navbar-brand-danger" class="brand-switcher demo-danger"></span></li>
			<li><span data-addclass="navbar-brand-warning" class="brand-switcher demo-warning"></span></li>
			<li><span data-addclass="navbar-brand-info" class="brand-switcher demo-info"></span></li>
			<li><span data-addclass="navbar-brand-inverse" class="brand-switcher demo-inverse"></span></li>
		</ul>
	</div>

	<div class="demo-body">
		<div class="option-title">Topnav</div>
		<ul id="demo-header-color" class="demo-color-list">
			<li><span data-addclass="navbar-cyan" class="topnav-switcher demo-cyan"></span></li>
			<li><span data-addclass="navbar-light-blue" class="topnav-switcher demo-light-blue"></span></li>
			<li><span data-addclass="navbar-blue" class="topnav-switcher demo-blue"></span></li>
			<li><span data-addclass="navbar-indigo" class="topnav-switcher demo-indigo"></span></li>
			<li><span data-addclass="navbar-deep-purple" class="topnav-switcher demo-deep-purple"></span></li>
			<li><span data-addclass="navbar-purple" class="topnav-switcher demo-purple"></span></li>
			<li><span data-addclass="navbar-pink" class="topnav-switcher demo-pink"></span></li>
			<li><span data-addclass="navbar-red" class="topnav-switcher demo-red"></span></li>
			<li><span data-addclass="navbar-teal" class="topnav-switcher demo-teal"></span></li>
			<li><span data-addclass="navbar-green" class="topnav-switcher demo-green"></span></li>
			<li><span data-addclass="navbar-light-green" class="topnav-switcher demo-light-green"></span></li>
			<li><span data-addclass="navbar-orange" class="topnav-switcher demo-orange"></span></li>
			<li><span data-addclass="navbar-deep-orange" class="topnav-switcher demo-deep-orange"></span></li>

			<li><span data-addclass="navbar-bluegray" class="topnav-switcher demo-bluegray"></span></li>


			<li><span data-addclass="navbar-gray" class="topnav-switcher demo-gray"></span></li>

			<li><span data-addclass="navbar-default" class="topnav-switcher demo-default"></span></li>
			<li><span data-addclass="navbar-bleachedcedar" class="topnav-switcher demo-bleachedcedar"></span></li>
			<li><span data-addclass="navbar-brown" class="topnav-switcher demo-brown"></span></li>
		</ul>
	</div>

	<div class="demo-body">
		<div class="option-title">Sidebar</div>
		<ul id="demo-sidebar-color" class="demo-color-list">
			<li><span data-addclass="sidebar-cyan" class="leftbar-switcher demo-cyan"></span></li>
			<li><span data-addclass="sidebar-light-blue" class="leftbar-switcher demo-light-blue"></span></li>
			<li><span data-addclass="sidebar-blue" class="leftbar-switcher demo-blue"></span></li>
			<li><span data-addclass="sidebar-indigo" class="leftbar-switcher demo-indigo"></span></li>
			<li><span data-addclass="sidebar-deep-purple" class="leftbar-switcher demo-deep-purple"></span></li>
			<li><span data-addclass="sidebar-purple" class="leftbar-switcher demo-purple"></span></li>
			<li><span data-addclass="sidebar-pink" class="leftbar-switcher demo-pink"></span></li>
			<li><span data-addclass="sidebar-red" class="leftbar-switcher demo-red"></span></li>
			<li><span data-addclass="sidebar-teal" class="leftbar-switcher demo-teal"></span></li>
			<li><span data-addclass="sidebar-green" class="leftbar-switcher demo-green"></span></li>
			<li><span data-addclass="sidebar-light-green" class="leftbar-switcher demo-light-green"></span></li>
			<li><span data-addclass="sidebar-orange" class="leftbar-switcher demo-orange"></span></li>
			<li><span data-addclass="sidebar-deep-orange" class="leftbar-switcher demo-deep-orange"></span></li>

			<li><span data-addclass="sidebar-bluegray" class="leftbar-switcher demo-bluegray"></span></li>


			<li><span data-addclass="sidebar-gray" class="leftbar-switcher demo-gray"></span></li>

			<li><span data-addclass="sidebar-default" class="leftbar-switcher demo-default"></span></li>
			<li><span data-addclass="sidebar-bleachedcedar" class="leftbar-switcher demo-bleachedcedar"></span></li>
			<li><span data-addclass="sidebar-brown" class="leftbar-switcher demo-brown"></span></li>
		</ul>
	</div>



</div>
<!-- /Switcher -->
<!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script src="admin/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script src="admin/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script src="admin/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script src="admin/js/enquire.min.js"></script> 									<!-- Load Enquire -->

<script src="admin/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script src="admin/plugins/velocityjs/velocity.ui.min.js"></script>

<script src="admin/plugins/progress-skylo/skylo.js"></script> 		<!-- Skylo -->

<script src="admin/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

<script src="admin/plugins/sparklines/jquery.sparklines.min.js"></script> 			 <!-- Sparkline -->

<script src="admin/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->

<script src="admin/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script src="admin/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script src="admin/plugins/dropdown.js/jquery.dropdown.js"></script> <!-- Fancy Dropdowns -->
<script src="admin/plugins/bootstrap-material-design/js/material.min.js"></script> <!-- Bootstrap Material -->
<script src="admin/plugins/bootstrap-material-design/js/ripples.min.js"></script> <!-- Bootstrap Material -->

<script src="admin/js/application.js"></script>
<script src="admin/demo/demo.js"></script>
<script src="admin/demo/demo-switcher.js"></script>

<!-- End loading site level scripts -->

<!-- Load page level scripts-->

<!-- Charts -->
<script src="admin/plugins/charts-flot/jquery.flot.min.js"></script>                 <!-- Flot Main File -->
<script src="admin/plugins/charts-flot/jquery.flot.pie.min.js"></script>             <!-- Flot Pie Chart Plugin -->
<script src="admin/plugins/charts-flot/jquery.flot.stack.min.js"></script>           <!-- Flot Stacked Charts Plugin -->
<script src="admin/plugins/charts-flot/jquery.flot.resize.min.js"></script>          <!-- Flot Responsive -->
<script src="admin/plugins/charts-flot/jquery.flot.tooltip.min.js"></script>         <!-- Flot Tooltips -->
<script src="admin/plugins/charts-flot/jquery.flot.spline.js"></script>              <!-- Flot Curved Lines -->
<script src="admin/plugins/easypiechart/jquery.easypiechart.min.js"></script>        <!-- EasyPieChart-->
<script src="admin/plugins/curvedLines-master/curvedLines.js"></script>              <!-- marvinsplines -->

<script src="admin/plugins/form-daterangepicker/moment.min.js"></script>             <!-- Moment.js for Date Range Picker -->

<!-- Date Range Picker -->
<script src="admin/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>               <!-- Datepicker -->
<!-- <script src="admin/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> --> <!-- DateTime Picker -->

<!-- <script src="admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>   -->    <!-- jVectorMap -->
<!-- <script src="admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>  --> <!--World Map-->
<script src="admin/plugins/chartist/dist/chartist.min.js"></script> <!-- chartist -->
<script src="admin/demo/demo-index.js"></script>                                     <!-- Initialize scripts for this page-->

<!-- End loading page level scripts-->
	@yield('scripts')

</body>
</html></html>