@extends('admin.layouts.app')

@section('content')

 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
      Settings
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Settings</a></li>
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
                                @foreach ($users as $user )
                                <tr>

                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                   
                                    <td>{{ date ('M j, Y', strtotime($user->created_at)) }}</td>

                                    <td>
                                    <a href="{{ route('users.edit', $user->id ) }}" class="fa fa-edit btn btn-sm btn-primary">
                                    </a>
                                    

                                        <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id ) }}"
                                                method="POST" style="display:none" >
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>

                                        <a href="" onclick="
                                            if(confirm('Are you sure you want to delete this?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $user->id }}').submit();
                                            }else{
                                                event.preventDefault();
                                            }">

                                            <span class="fa fa-trash btn btn-sm btn-danger"></span>
                                        </a>

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

       <!-- Modal add-->
       <div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">

            <form action="{{ route('users.store') }}" method="POST">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label for=""><input type="checkbox">Editor</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label for=""><input type="checkbox">Editor</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label for=""><input type="checkbox">Editor</label>
                        </div>
                    </div>
                
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">

                    <small id="password" class="text-muted">
                        Must be 6-20 characters long.
                    </small>
                </div>

                <div class="form-group">
                    <label for="passwoord">Retype - Password</label>
                    <input type="password" name="password_confirmation" class="form-control">

                    <small id="password" class="text-muted">
                        It should match with the Password above.
                    </small>
                </div>

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add User</button>
                {{-- <a href="" onclick="
                        if(confirm('Are you sure you want to add a New User?')){
                            event.preventDefault();
                            document.getElementById('add-{{ $user->id }}').submit();
                        }else{
                            event.preventDefault();
                        }">
                        <span class="btn btn-success">Add User</span>
                    </a> --}}
                </div>
            </form>
        </div>
        </div>
    </div>

    

      
    </section>
    <!-- /.content -->

</section>
@endsection

@section('script')
    <script>

        $('#useredit').on('show.bs.modal', function (event) {

            var button   = $(event.relatedTarget)
            var myUser   = button.data('name')
            var email    = button.data('email')
            var role     = button.data('role_id')
            var password = button.data('password')


            var modal = $(this)//instance of the window open

            //varaiables from the database
            modal.find('.modal-body #name').val(myUser)
            modal.find('.modal-body #email').val(email)
            modal.find('.modal-body #type').val(role)
            modal.find('.modal-body #password').val(password)
        })

    </script>
@endsection