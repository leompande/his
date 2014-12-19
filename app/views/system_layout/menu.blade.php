
<div id="sidebar-left" class="col-lg-2 col-sm-1">

    <input type="text" class="search hidden-sm" placeholder="search" />

    <div class="nav-collapse sidebar-nav collapse navbar-collapse bs-navbar-collapse">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="{{ url('system/dashboard') }}"><i class="fa fa-dashboard fa-2x"></i>&nbsp;<span class="hidden-sm"> Dashboard</span></a></li>
            <li>
                <a class="dropmenu" href="#"><i class="fa fa-gear fa-2x"></i>&nbsp;<span class="hidden-sm"> Settings</span></a>
                <ul>
                    <li><a class="submenu" href="{{ url('system/services') }}"><i class="fa fa-cutlery"></i><span class="hidden-sm"> Services</span></a></li>
                    <li><a class="submenu" href="{{ url('system/facilities') }}"><i class="fa fa-cube"></i><span class="hidden-sm"> Facilities</span></a></li>
                    <li><a class="submenu" href="{{ url('system/categories') }}"><i class="fa fa-asterisk "></i><span class="hidden-sm"> Categories</span></a></li>
                    <li><a class="submenu" href="{{ url('system/rooms') }}"><i class="fa fa-cube"></i><span class="hidden-sm"> Rooms</span></a></li>
                    <li><a class="submenu" href="{{ url('system/bookings') }}"><i class="fa fa-book"></i><span class="hidden-sm"> Bookings</span></a></li>
                    <li><a class="submenu" href="{{ url('system/clients') }}"><i class="fa fa-users"></i><span class="hidden-sm"> Clients</span></a></li>
                    <li><a class="submenu" href="{{ url('system/employees') }}"><i class="fa fa-user-md"></i><span class="hidden-sm"> Employees</span></a></li>
                    <li><a class="submenu" href="{{ url('system/users') }}"><i class="fa fa-user"></i><span class="hidden-sm"> Users</span></a></li>
                </ul>
            </li>
            <li>
                <a  href="{{ url('system/report') }}"><i class="fa fa-bar-chart-o fa-2x"></i>&nbsp;<span class="hidden-sm"> Reports</span></a>
            </li>
            </ul>
    </div>
</div>