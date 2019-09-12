
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
    
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }} " class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ auth::user()->name ?? 'Anonymous' }}</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
    
          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
            </div>
          </form>
          <!-- /.search form -->
    
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
          <li class="active"><a href="{{ url('home') }}"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
            
          @if(Auth::user()->role_id == 1)
             <li class="treeview">
                <a href="#"><i class="fa fa-share-alt"></i> <span>Survey</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url('survey') }}">View</a></li>
                  <li><a href="{{ route('survey.create') }}">Create</a></li>
                </ul>
              </li>
              <!-- This is the question url -->
              <li class="treeview">
                  <a href="#"><i class="fa fa-question"></i> <span>Questions</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ url('questions') }}">View</a></li>
                    <li><a href="{{ route('questions.create') }}">Create</a></li>
                  </ul>
                </li>
              <!-- Survey Results -->
              <li class="treeview">
                <a href="#"><i class="fa fa-question"></i> <span>Survey Results</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url('answer') }}">View</a></li>
                  
                </ul>
              </li>
              <!-- end of results -->
                <li class="header">Settings</li>
                <li class="treeview">
                  <a href=""><i class="fa fa-user"></i> <span>Users</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('users.index') }}">View</a></li>
                    <li><a href="">Add Users</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-question"></i> <span>Roles</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('roles.index') }}">View</a></li>
                    <li><a href="{{ route('roles.create') }}">Add Roles</a></li>
                  </ul>
                </li>
          @endcan
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>