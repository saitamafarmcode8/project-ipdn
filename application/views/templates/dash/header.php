<nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar">
	<div class="container-fluid">
		<div class="navbar-header">
		<button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"><a aria-controls="navbarSupportedContent" href="javascript:;" class="open-navbar-container black"><i class="ft-more-vertical"></i></a></span>
		
		</div>
		<div class="navbar-container">
		<div id="navbarSupportedContent" class="collapse navbar-collapse">
			<ul class="navbar-nav">
			
			<li class="dropdown nav-item">
				<a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
					<i class="ft-user font-medium-3 blue-grey darken-4"></i><p class="d-none">User Settings</p>
				</a>
				<div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu text-left dropdown-menu-right">
					<a href="javascript:;" class="dropdown-item py-1"><i class="ft-settings mr-2"></i><span>Settings</span></a>
					<a href="<?= base_url('news_profile_session_xml'); ?>" class="dropdown-item py-1"><i class="ft-edit mr-2"></i><span>Edit Profile</span></a>
					<a href="javascript:;" class="dropdown-item py-1"><i class="ft-mail mr-2"></i><span>My Inbox</span></a>
					<div class="dropdown-divider"></div>
					<a href="<?= base_url('logout'); ?>" class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a>
				</div>
			</li>
			<li class="nav-item d-none d-lg-block"><a href="javascript:;" class="nav-link position-relative notification-sidebar-toggle"><i class="ft-align-left font-medium-3 blue-grey darken-4"></i>
				<p class="d-none">Notifications Sidebar</p></a></li>
			</ul>
		</div>
		</div>
	</div>
</nav>
