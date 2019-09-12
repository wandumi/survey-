@extends('admin.layouts.app')

@section('content')

 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
        Roles
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Roles</a></li>
      <li class="active">Create</li>
    </ol>
  </section>

    <!-- Main content -->
    <section class="content">
     

      <div class="row">
          <div class="col-md-8 col-md-offset-2">
                 
            <div class="panel panel-default">
                <div class="panel-heading">
               
                        <div class="panel-title"><h3>Add User</h3></div>
                        
               
                </div>
                <div>
                    @include('admin.message.success')
                </div>
                <div class="panel-body">
                    <div>
                        @include('admin.message.errors')
                    </div>
                    <form method="POST" action="{{ route('roles.store') }}">

                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}">
                            
                        </div>
                        <div class="form-group">
                          <label for="name">Description</label>
                          <input type="text" id="description" class="form-control" name="description" value="{{ old('name') }}">
                          
                      </div>
    
                        <div class="modal-footer">
                        
                        <button type="submit" class="btn btn-primary">Add Role</button>
                        </div>
                    </form>
                    

                </div>
                <div class="panel-footer">
                    
                </div>
            </div>
          </div>
      </div>

</section>

@endsection

