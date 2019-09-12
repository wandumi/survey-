@extends('admin.layouts.app')

@section('content')

 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
        User
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>User</a></li>
      <li class="active">Create</li>
    </ol>
  </section>

    <!-- Main content -->
    <section class="content">
     

      <div class="row">
          <div class="col-md-8 col-md-offset-2">
                 
            <div class="panel panel-default">
                <div class="panel-heading">
               
                        <div class="panel-title"><h3>Edit User</h3></div>
                        
               
                </div>
                <div>
                    @include('admin.message.success')
                </div>
                <div class="panel-body">

                    <form action="{{ route('users.create') }}" method="POST">

                        @csrf
                        
    
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" >
                        </div>
    
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" >
                        </div>
    
                       
    
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="password" value="{{ old('password') }}">
    
                            <small id="password" class="text-muted">
                                Must be 6-20 characters long.
                            </small>
                        </div>
    
                        <div class="form-group">
                            <label for="passwoord">Retype - Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" value="{{ old('password')}}">
    
                            <small id="password" class="text-muted">
                                It should match with the Password above.
                            </small>
                        </div>
    
                        
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update User</button>
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
      </div>

</section>

@endsection

