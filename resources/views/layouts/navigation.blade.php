@if (Auth::guard('staff')->check())
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
<li class="header">STAFF NAVIGATION</li>
        <li>
            <a href="{{ route('patient.index') }}">
                <i class="fa fa-user-o"></i> <span>Patient List</span>
            </a>
        </li>
    <li class="active treeview menu-open">
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
    </li>
</ul>
</section>
<!-- /.sidebar -->
@else
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">DOCTOR NAVIGATION</li>
            <li>
                <a href="{{ route('doctor.list', Auth::user()->id) }}">
                    <i class="fa fa-user-o"></i> <span>Patient List</span>
                </a>
            </li>
        <li class="active treeview menu-open">
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
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
@endif
