<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('asset-admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Aslan</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Admin</a>
      </div>
    </div>
    <!-- /. -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li><a href="/admin"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-lock"></i> <span>Roles And Permissions</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> User Management</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Roles Management</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Permission Management</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-database"></i> <span>Data Processing</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Member Data </a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Member Raw Data</a></li>
          <li><a href="{{route('sales')}}"><i class="fa fa-circle-o"></i> Sales Data</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Point Accumulation Data</a></li>
        </ul>
      </li>
      <li><a href="/"><i class="fa fa-sign-out"></i> <span>Log out</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>