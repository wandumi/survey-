
  <!-- top of page  -->
  @include('admin.layouts.includes.topheader')
  <!-- top of the page -->

  <!-- Navbar -->
  @include('admin.layouts.includes.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.layouts.includes.aside')
  <!-- Main Sidebar Container -->

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        {{-- <section class="content-header">
          <h1>
            Page Header
            <small>Optional description</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section> --}}
    
        <!-- Main content -->
        <section class="content container-fluid">
    
          <!--------------------------
            | Your Page Content Here |
            -------------------------->
            @yield('content')
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

  <!-- footer page -->
  @include('admin.layouts.includes.footer')
  <!-- footer page -->

 

  