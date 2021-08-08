<div class="main-wrapper">
<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll" style="overflow: scroll;
    height: 100%;">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Admin</span>
							</li>
							
			<li class="{{ Request::is('index') ? 'active' : '' }}" href="{{ url('index') }}"><a  href="{{ url('index') }}"><i class="la la-dashboard"></i> <span>Dashboard</span></a></li>
				    	<li class="{{ Request::is('clients') ? 'active' : '' }}"><a  href="{{ url('clients-list') }}"><i class="la la-users"></i> <span>Clients</span></a></li>	
				    				    	<li class="{{ Request::is('clients') ? 'active' : '' }}"><a  href="{{ url('clients-support') }}"><i class="la la-users"></i> <span>Support Contract</span></a></li>		
				<li class="{{ Request::is('employees') ? 'active' : '' }}" href="{{ url('employees') }}"><a  href="{{ url('employees-list') }}"><i class="la la-users"></i> <span>Employees</span></a></li>
	<li class="{{ Request::is('tickets') ? 'active' : '' }}"><a  href="{{ url('tickets') }}"><i class="la la-ticket"></i><span>SR Common Area</span></a></li>	
			<li class="{{ Request::is('leave-reports') ? 'active' : '' }}" href="{{ url('leave-reports') }}"><a  href="{{ url('leave-reports') }}"><i class="la la-dashboard"></i> <span>Reports</span></a></li>
					
					
						<li class="submenu">
								<a href="#"><i class="la la-user"></i> <span> Settings </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">


								<li>
        <a class="{{ Request::is('profile') ? 'active' : '' }}" href="{{ url('profile') }}"> Dynamic Forms  </a></li>

		<li>
        <a class="{{ Request::is('client-profile') ? 'active' : '' }}" href="{{ url('roles-permissions') }}"> Roles & Permissions </a></li>
	<li>
        <a class="{{ Request::is('client-profile') ? 'active' : '' }}" href="{{ url('client-profile') }}"> Notifications</a></li>
								
								</ul>
							</li>
					
					
					
						<!-- 	<li class="submenu">
								<a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a  class="{{ Request::is('index') ? 'active' : '' }}" href="{{ url('index') }}">Admin Dashboard</a></li>
									<li><a class="{{ Request::is('employee-dashboard') ? 'active' : '' }}" href="{{ url('employee-dashboard') }}">Employee Dashboard</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;"> -->
								<!-- <li class="{{ Request::is('chat') ? 'active' : '' }}">
        <a  href="{{ url('chat') }}">Chat</a></li> -->
									
									<!-- <li class="submenu">
										<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
										<li class="{{ Request::is('voice-call') ? 'active' : '' }}">
        <a  href="{{ url('voice-call') }}">Voice Call</a></li>

		<li class="{{ Request::is('video-call') ? 'active' : '' }}">
        <a  href="{{ url('video-call') }}">Video Call</a></li>
											
		<li class="{{ Request::is('outgoing-call') ? 'active' : '' }}">
        <a  href="{{ url('outgoing-call') }}">Outgoing Call</a></li>

		<li class="{{ Request::is('incoming-call') ? 'active' : '' }}">
        <a  href="{{ url('incoming-call') }}">Incoming Call</a></li>
											
											
										</ul>
									</li> -->

		<!-- <li><a class="{{ Request::is('events') ? 'active' : '' }}" href="{{ url('events') }}">Calendar</a></li>

		<li><a class="{{ Request::is('contacts') ? 'active' : '' }}" href="{{ url('contacts') }}">Contacts</a></li>

		<li><a class="{{ Request::is('inbox') ? 'active' : '' }}" href="{{ url('inbox') }}">Email</a></li>						
									
		<li><a class="{{ Request::is('file-manager') ? 'active' : '' }}"  href="{{ url('file-manager') }}">File Manager</a></li>								 -->
		<!-- </ul> -->
							</li>
							<li class="menu-title"> 
								<span>Client</span>
							</li>
								<li class="{{ Request::is('index') ? 'active' : '' }}" href="{{ url('index') }}"><a  href="{{ url('index') }}"><i class="la la-dashboard"></i> <span>Dashboard</span></a></li>
				    	
				    	
				
	<li class="{{ Request::is('tickets') ? 'active' : '' }}"><a  href="{{ url('tickets') }}"><i class="la la-ticket"></i><span>Service Request</span></a></li>	
			<li class="{{ Request::is('index') ? 'active' : '' }}" href="{{ url('conversations') }}"><a  href="{{ url('conversations') }}"><i class="la la-dashboard"></i> <span>Chat</span></a></li>

							
							<li class="menu-title"> 
								<span>Employees</span>
							</li>
						
							<li class="{{ Request::is('index') ? 'active' : '' }}" href="{{ url('index') }}"><a  href="{{ url('index') }}"><i class="la la-dashboard"></i> <span>Dashboard</span></a></li>
				    	
	<li class="{{ Request::is('tickets') ? 'active' : '' }}"><a  href="{{ url('tickets') }}"><i class="la la-ticket"></i><span>SR Common Console</span></a></li>	
	
		<li class="{{ Request::is('tickets') ? 'active' : '' }}"><a  href="{{ url('tickets') }}"><i class="la la-ticket"></i><span>Assigned Tickets</span></a></li>	
			<li class="{{ Request::is('index') ? 'active' : '' }}" href="{{ url('conversations') }}"><a  href="{{ url('conversations') }}"><i class="la la-dashboard"></i> <span>Chat</span></a></li>
						
						</ul>
					</div>
                </div>
            </div>
            </div>


			