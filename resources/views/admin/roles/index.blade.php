@extends('admin.layouts.app')

@section('content')

 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
      Roles
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Roles</a></li>
      <li class="active">Create</li>
    </ol>
  </section>

    <!-- Main content -->
    <section class="content">
     

      <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <a href="{{ route('roles.create') }}" class="btn btn-success pull-right">Add User</a>
            <div class="panel panel-default">
                <div class="panel-heading">
               
                        <div class="panel-title"><h3>User Roles</h3></div>
                        
                </div>
                <div>
                    @include('admin.message.success')
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Roles</th>
                                <th>Date</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                                @foreach($roles as $role)
                                   <tr>
                                       <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ date('M j, Y', strtotime($role->created_at)) }}</td>
                                        <td>
                                            <a href="" class="btn btn-success"><i class=" fa fa-eye"></i></a> |
                                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                   </tr>
                                    
                                @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Roles</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
          </div>
      </div>


    </section>
    <!-- /.content -->

</section>
@endsection
