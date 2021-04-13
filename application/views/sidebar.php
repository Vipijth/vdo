<div class="loader"></div>
      <div id="app">
         <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
               <div class="form-inline mr-auto">
				   <ul class="navbar-nav mr-3">
						<li>
							<a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
								<i data-feather="align-justify"></i>
							</a>
					   </li>
					</ul>
			   </div>
               <ul class="navbar-nav navbar-right">
                  <li class="dropdown">
                     <a href="#" data-toggle="dropdown"  class="nav-link dropdown-toggle nav-link-lg nav-link-user"> 
						 <img alt="image" src="assets/images/user.png" class="user-img-radious-style"> 
						 <span class="d-sm-none d-lg-inline-block"></span>
					  </a>
                     <div class="dropdown-menu dropdown-menu-right pullDown">
                        <div class="dropdown-title">Hello User Name</div>
                        <a href="#" class="dropdown-item has-icon"> 
							<i class="far fa-user"></i> Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php base_url(); ?>logout"  class="dropdown-item has-icon text-danger">
							<i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                     </div>
                  </li>
               </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
               <aside id="sidebar-wrapper">
                  <div class="sidebar-brand">
                     <a href="<?php base_url(); ?>enter">
						 <img alt="image" src="assets/images/logo.png" class="header-logo" />
						 <span class="logo-name">Video Platform</span>
                     </a>
                  </div>
                  <ul class="sidebar-menu">
                     <li class="dropdown ">
                        <a href="<?php base_url(); ?>enter" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
                     </li>
					 <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="film"></i><span>Videos</span></a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="<?php base_url(); ?>video_upload">Uploaded</a></li>
							<li><a class="nav-link" href="<?php base_url(); ?>video_list">List</a></li>
						</ul> 
                     </li>
					 <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="folder"></i><span>Label</span></a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="<?php base_url(); ?>folder">Create</a></li>
							<li><a class="nav-link" href="<?php base_url(); ?>folder">List</a></li>
						</ul> 
                     </li> 
                  </ul>
               </aside>
            </div>