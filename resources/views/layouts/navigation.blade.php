@if (Auth::guard('staff')->check())
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">STAFF NAVIGATION</li>
    <li class="{{ Request::is('staff/dashboard') ? 'active' : '' }}">
        <a href="{{ route('staff.dashboard') }}"><i class="fa fa-circle-o"></i> Dashboard</a>
    </li>
    <li class="{{ Request::is('staffs/patient') ? 'active' : '' }}">
        <a href="{{ route('staff.getPatients') }}">
            <i class="fa fa-user-o"></i> <span>Patient List</span>
        </a>
    </li>
    {{-- <li class="active treeview menu-open">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul>
    </li> --}}
</ul>
</section>
<!-- /.sidebar -->
@elseif( Auth::guard('admin')->check() )
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">ADMIN NAVIGATION</li>
    <li class="{{ Request::is('admins/dashboard') ? 'active' : '' }}">
        <a href="{{ route('admins.dashboard') }}">
            <i class="fa fa-user-o"></i> <span>Dashboard</span>
        </a>
    </li>
    <li class="{{ Request::is('admins/staff') || Request::is('admins/midwife') || Request::is('admins/admin') ? 'active menu-open ' : '' }}treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Acounts</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('admins/staff') ? 'active' : '' }}"><a href="{{ route('admins.staffIndex') }}"><i class="fa fa-circle-o"></i> Staff</a></li>
            <li class="{{ Request::is('admins/midwife') ? 'active' : '' }}"><a href="{{ route('admins.midwifeIndex') }}"><i class="fa fa-circle-o"></i> Midwife</a></li>
            <li class="{{ Request::is('admins/admin') ? 'active' : '' }}"><a href="{{ route('admins.adminIndex') }}"><i class="fa fa-circle-o"></i> Admins</a></li>
        </ul>
    </li>
</ul>
</section>
<!-- /.sidebar -->
@else
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MIDWIFE NAVIGATION</li>
    <li class="{{ Request::is('doc/dashboard') ? 'active' : '' }}">
        <a href="{{ route('doctor.dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li class="{{ Request::is('doctor/'. Auth::user()->id.'/patientList') ? 'active' : '' }}">
        <a href="{{ route('doctor.list', Auth::user()->id) }}">
            <i class="fa fa-user-o"></i> <span>My Patients</span>
        </a>
    </li>
    {{-- <li class="active treeview menu-open">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul>
    </li> --}}
</ul>
</section>
<!-- /.sidebar -->
@endif
