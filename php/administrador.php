<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Sessión | Administrador </title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/neon.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.10.2.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
</head>
<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">
		
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="index.html">
					<!--<img src="assets/images/logo@2x.png" width="120" alt="" />-->
					<img src="assets/images/logo@2x.png" width="120" alt="" />
				</a>
			</div>
			
						<!-- logo collapse icon -->
						
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
									
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
		</header>
			
			
		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<!-- Search Bar -->
			<li id="search">
				<form method="get" action="">
					<input type="text" name="q" class="search-input" placeholder="Buscar..."/>
					<button type="submit">
						<i class="entypo-search"></i>
					</button>
				</form>
			</li>
			<li class="active opened active">
				<a href="index.html">
					<i class="entypo-gauge"></i>
					<span>Dashboard</span>
				</a>
				<ul>
					<li class="active">
						<a href="index.html">
							<span>Dashboard 1</span>
						</a>
					</li>
					<li>
						<a href="dashboard-2.html">
							<span>Dashboard 2</span>
						</a>
					</li>
					<li>
						<a href="highlights.html">
							<span>What's New</span>
							<span class="badge badge-success badge-roundless">v1.1.3</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="layout-api.html">
					<i class="entypo-layout"></i>
					<span>Layouts</span>
				</a>
				<ul>
					<li>
						<a href="layout-api.html">
							<span>Layout API</span>
						</a>
					</li>
					<li>
						<a href="layout-collapsed-sidebar.html">
							<span>Collapsed Sidebar</span>
						</a>
					</li>
					<li>
						<a href="layout-fixed-sidebar.html">
							<span>Fixed Sidebar</span>
						</a>
					</li>
					<li>
						<a href="layout-chat-open.html">
							<span>Chat Open</span>
						</a>
					</li>
					<li>
						<a href="layout-horizontal-menu-boxed.html">
							<span>Horizontal Menu Boxed</span>
						</a>
					</li>
					<li>
						<a href="layout-horizontal-menu-fluid.html">
							<span>Horizontal Menu Fluid</span>
						</a>
					</li>
					<li>
						<a href="layout-mixed-menus.html">
							<span>Mixed Menus</span>
						</a>
					</li>
					<li>
						<a href="layout-page-transition-fade.html">
							<span>Page Enter Transitions</span>
						</a>
						<ul>
							<li>
								<a href="layout-page-transition-fade.html">
									<span>Fade Scale</span>
								</a>
							</li>
							<li>
								<a href="layout-page-transition-left-in.html">
									<span>Left In</span>
								</a>
							</li>
							<li>
								<a href="layout-page-transition-right-in.html">
									<span>Right In</span>
								</a>
							</li>
							<li>
								<a href="layout-page-transition-fade-only.html">
									<span>Fade Only</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="ui-panels.html">
					<i class="entypo-newspaper"></i>
					<span>UI Elements</span>
				</a>
				<ul>
					<li>
						<a href="ui-panels.html">
							<span>Panels</span>
						</a>
					</li>
					<li>
						<a href="ui-tiles.html">
							<span>Tiles</span>
						</a>
					</li>
					<li>
						<a href="forms-buttons.html">
							<span>Buttons</span>
						</a>
					</li>
					<li>
						<a href="ui-typography.html">
							<span>Typography</span>
						</a>
					</li>
					<li>
						<a href="ui-tabs-accordions.html">
							<span>Tabs &amp; Accordions</span>
						</a>
					</li>
					<li>
						<a href="ui-tooltips-popovers.html">
							<span>Tooltips &amp; Popovers</span>
						</a>
					</li>
					<li>
						<a href="ui-navbars.html">
							<span>Navbars</span>
						</a>
					</li>
					<li>
						<a href="ui-breadcrumbs.html">
							<span>Breadcrumbs</span>
						</a>
					</li>
					<li>
						<a href="ui-badges-labels.html">
							<span>Badges &amp; Labels</span>
						</a>
					</li>
					<li>
						<a href="ui-progress-bars.html">
							<span>Progress Bars</span>
						</a>
					</li>
					<li>
						<a href="ui-modals.html">
							<span>Modals</span>
						</a>
					</li>
					<li>
						<a href="ui-blockquotes.html">
							<span>Blockquotes</span>
						</a>
					</li>
					<li>
						<a href="ui-alerts.html">
							<span>Alerts</span>
						</a>
					</li>
					<li>
						<a href="ui-pagination.html">
							<span>Pagination</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="mailbox.html">
					<i class="entypo-mail"></i>
					<span>Mailbox</span>
					<span class="badge badge-secondary">8</span>
				</a>
				<ul>
					<li>
						<a href="mailbox.html">
							<i class="entypo-inbox"></i>
							<span>Inbox</span>
						</a>
					</li>
					<li>
						<a href="mailbox-compose.html">
							<i class="entypo-pencil"></i>
							<span>Compose Message</span>
						</a>
					</li>
					<li>
						<a href="mailbox-message.html">
							<i class="entypo-attach"></i>
							<span>View Message</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="forms-main.html">
					<i class="entypo-doc-text"></i>
					<span>Forms</span>
				</a>
				<ul>
					<li>
						<a href="forms-main.html">
							<span>Basic Elements</span>
						</a>
					</li>
					<li>
						<a href="forms-advanced.html">
							<span>Advanced Plugins</span>
						</a>
					</li>
					<li>
						<a href="forms-wizard.html">
							<span>Form Wizard</span>
						</a>
					</li>
					<li>
						<a href="forms-validation.html">
							<span>Data Validation</span>
						</a>
					</li>
					<li>
						<a href="forms-masks.html">
							<span>Input Masks</span>
						</a>
					</li>
					<li>
						<a href="forms-sliders.html">
							<span>Sliders</span>
						</a>
					</li>
					<li>
						<a href="forms-file-upload.html">
							<span>File Upload</span>
						</a>
					</li>
					<li>
						<a href="forms-wysiwyg.html">
							<span>Editors</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="tables-main.html">
					<i class="entypo-window"></i>
					<span>Tables</span>
				</a>
				<ul>
					<li>
						<a href="tables-main.html">
							<span>Basic Tables</span>
						</a>
					</li>
					<li>
						<a href="tables-datatable.html">
							<span>Data Tables</span>
							<span class="badge badge-warning badge-roundless">Updated</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="extra-icons.html">
					<i class="entypo-bag"></i>
					<span>Extra</span>
					<span class="badge badge-info badge-roundless">New Items</span>
				</a>
				<ul>
					<li>
						<a href="extra-icons.html">
							<span>Icons</span>
							<span class="badge badge-success">3</span>
						</a>
						<ul>
							<li>
								<a href="extra-icons.html">
									<span>Font Awesome</span>
								</a>
							</li>
							<li>
								<a href="extra-icons-entypo.html">
									<span>Entypo</span>
								</a>
							</li>
							<li>
								<a href="extra-icons-glyphicons.html">
									<span>Glyph Icons</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="extra-portlets.html">
							<span>Portlets</span>
						</a>
					</li>
					<li>
						<a href="extra-google-maps.html">
							<span>Maps</span>
						</a>
						<ul>
							<li>
								<a href="extra-google-maps.html">
									<span>Google Maps</span>
								</a>
							</li>
							<li>
								<a href="extra-vector-maps.html">
									<span>Vector Maps</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="extra-chat-api.html">
							<span>Chat API</span>
						</a>
					</li>
					<li>
						<a href="extra-calendar.html">
							<span>Calendar</span>
						</a>
					</li>
					<li>
						<a href="extra-notes.html">
							<span>Notes</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-lockscreen.html">
							<span>Lockscreen</span>
						</a>
					</li>
					<li>
						<a href="index.html">
							<span>Login</span>
						</a>
					</li>
					<li>
						<a href="extra-invoice.html">
							<span>Invoice</span>
						</a>
					</li>
					<li>
						<a href="extra-gallery.html">
							<span>Gallery</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
						<ul>
							<li>
								<a href="extra-gallery.html">
									<span>Albums</span>
								</a>
							</li>
							<li>
								<a href="extra-gallery-single.html">
									<span>Single Album</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="extra-profile.html">
							<span>Profile</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-404.html">
							<span>404 Page</span>
						</a>
					</li>
					<li>
						<a href="extra-blank-page.html">
							<span>Blank Page</span>
						</a>
					</li>
					<li>
						<a href="extra-timeline.html">
							<span>Timeline</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-timeline-centered.html">
							<span>Timeline Centered</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-tocify.html">
							<span>Tocify</span>
						</a>
					</li>
					<li>
						<a href="ui-notifications.html">
							<span>Notifications</span>
						</a>
					</li>
					<li>
						<a href="extra-scrollbox.html">
							<span>Scrollbox</span>
						</a>
					</li>
					<li>
						<a href="extra-image-crop.html">
							<span>Image Crop</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="charts.html">
					<i class="entypo-chart-bar"></i>
					<span>Charts</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="entypo-flow-tree"></i>
					<span>Menu Levels</span>
				</a>
				<ul>
					<li>
						<a href="#">
							<i class="entypo-flow-line"></i>
							<span>Menu Level 1.1</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-flow-line"></i>
							<span>Menu Level 1.2</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-flow-line"></i>
							<span>Menu Level 1.3</span>
						</a>
						<ul>
							<li>
								<a href="#">
									<i class="entypo-flow-parallel"></i>
									<span>Menu Level 2.1</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-parallel"></i>
									<span>Menu Level 2.2</span>
								</a>
								<ul>
									<li>
										<a href="#">
											<i class="entypo-flow-cascade"></i>
											<span>Menu Level 3.1</span>
										</a>
										<ul>
											<li>
												<a href="#">
													<i class="entypo-flow-branch"></i>
													<span>Menu Level 4.1</span>
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-cascade"></i>
											<span>Menu Level 3.2</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-parallel"></i>
									<span>Menu Level 2.3</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
				
	</div>	
	<div class="main-content">
		
<div class="row">
	
	<!-- Profile Info and Notifications -->
	<div class="col-md-6 col-sm-8 clearfix">
		
		<ul class="user-info pull-left pull-none-xsm">
		
						<!-- Profile Info -->
			<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
				
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="assets/images/thumb-1@2x.png" alt="" class="img-circle" width="44" />
					Art Ramadani
				</a>
				
				<ul class="dropdown-menu">
					
					<!-- Reverse Caret -->
					<li class="caret"></li>
					
					<!-- Profile sub-links -->
					<li>
						<a href="#">
							<i class="entypo-user"></i>
							Edit Profile
						</a>
					</li>
					
					<li>
						<a href="mailbox.html">
							<i class="entypo-mail"></i>
							Inbox
						</a>
					</li>
					
					<li>
						<a href="extra-calendar.html">
							<i class="entypo-calendar"></i>
							Calendar
						</a>
					</li>
					
					<li>
						<a href="#">
							<i class="entypo-clipboard"></i>
							Tasks
						</a>
					</li>
				</ul>
			</li>
		
		</ul>			
	</div>			
	
	<!-- Raw Links -->
	<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
		<ul class="list-inline links-list pull-right">
			
			<li>
				<a href="index.html">Salir<i class="entypo-logout right"></i></a>
			</li>
		</ul>
		
	</div>
	
</div>

<hr />
<!-- Footer -->
<footer class="main">
	
		
	&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="" target="_blank">Laborator</a>
	
</footer>	</div>
	
	
<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
	
	<div class="chat-inner">
	
		
		<h2 class="chat-header">
			<a href="#" class="chat-close" data-animate="1"><i class="entypo-cancel"></i></a>
			
			<i class="entypo-users"></i>
			Chat
			<span class="badge badge-success is-hidden">0</span>
		</h2>
		
		
		<div class="chat-group" id="group-1">
			<strong>Favorites</strong>
			
			<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
			<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
			<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
			<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
		</div>
		
		
		<div class="chat-group" id="group-2">
			<strong>Work</strong>
			
			<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
			<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
			<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
		</div>
		
		
		<div class="chat-group" id="group-3">
			<strong>Social</strong>
			
			<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
			<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
		</div>
	
	</div>
	
	<!-- conversation template -->
	<div class="chat-conversation">
		
		<div class="conversation-header">
			<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>
			
			<span class="user-status"></span>
			<span class="display-name"></span> 
			<small></small>
		</div>
		
		<ul class="conversation-body">	
		</ul>
		
		<div class="chat-textarea">
			<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
		</div>
		
	</div>
	
</div>


<!-- Chat Histories -->
<ul class="chat-history" id="sample_history">
	<li>
		<span class="user">Art Ramadani</span>
		<p>Are you here?</p>
		<span class="time">09:00</span>
	</li>
	
	<li class="opponent">
		<span class="user">Catherine J. Watkins</span>
		<p>This message is pre-queued.</p>
		<span class="time">09:25</span>
	</li>
	
	<li class="opponent">
		<span class="user">Catherine J. Watkins</span>
		<p>Whohoo!</p>
		<span class="time">09:26</span>
	</li>
	
	<li class="opponent unread">
		<span class="user">Catherine J. Watkins</span>
		<p>Do you like it?</p>
		<span class="time">09:27</span>
	</li>
</ul>




<!-- Chat Histories -->
<ul class="chat-history" id="sample_history_2">
	<li class="opponent unread">
		<span class="user">Daniel A. Pena</span>
		<p>I am going out.</p>
		<span class="time">08:21</span>
	</li>
	
	<li class="opponent unread">
		<span class="user">Daniel A. Pena</span>
		<p>Call me when you see this message.</p>
		<span class="time">08:27</span>
	</li>
</ul></div>

<!-- Sample Modal (Default skin) -->
<div class="modal fade" id="sample-modal-dialog-1">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Widget Options - Default Modal</h4>
			</div>
			
			<div class="modal-body">
				<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<!-- Sample Modal (Skin inverted) -->
<div class="modal invert fade" id="sample-modal-dialog-2">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Widget Options - Inverted Skin Modal</h4>
			</div>
			
			<div class="modal-body">
				<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<!-- Sample Modal (Skin gray) -->
<div class="modal gray fade" id="sample-modal-dialog-3">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Widget Options - Gray Skin Modal</h4>
			</div>
			
			<div class="modal-body">
				<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

	<link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom Scripts -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="assets/js/raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>
	<script src="assets/js/toastr.js"></script>
	<script src="assets/js/neon-chat.js"></script>
	<script src="assets/js/neon-custom.js"></script>
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>