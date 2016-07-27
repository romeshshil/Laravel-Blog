
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">

            </div>
        <div class="pull-left info">
          <p>Romesh Shil</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">

        <li class="treeview">
          <a href="{{URL::to('admin/home')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-credit-card"></i> <span>BLog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('blog/list')}}"><i class="fa fa-list"></i>Blog List</a></li>
            <li><a href="{{URL::to('blog/create')}}"><i class="fa fa-plus "></i>New Blog</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa  fa-user"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('user/list')}}"><i class="fa fa-list"></i>User List</a></li>
            <li><a href="{{URL::to('user/create')}}"><i class="fa fa-user-plus "></i>New User</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-wrench "></i> <span>Service</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('service/list')}}"><i class="fa fa-list"></i>Service List</a></li>
            <li><a href="{{URL::to('service/create')}}"><i class="fa fa-plus "></i>New Service</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-picture-o "></i> <span>Image Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('slider/list')}}"><i class="fa fa-list"></i>Slider List</a></li>
            <li><a href="{{URL::to('slider/create')}}"><i class="fa fa-plus "></i>New Slider</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Team Member</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('team/list')}}"><i class="fa fa-circle-o"></i>Teammember List</a></li>
            <li><a href="{{URL::to('team/create')}}"><i class="fa fa-circle-o"></i>New Member</a></li>
          </ul>
        </li>
  
        
        <li><a href="{{ URL::to('setting/id/1') }}"><i class="fa  fa-cogs "></i> <span>Setting</span></a></li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
