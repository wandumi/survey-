@extends('admin.layouts.app')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Survey
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Survey</a></li>
      <li class="active">home</li>
    </ol>
  </section>

    <section class="content">
        
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">View Created Survey's</h3>

              <div class="box-tools pull-right">
                <a href="{{ route('survey.create') }}" class="btn btn-success">Create New</a> 
                
                {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> --}}
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-striped table-responsive">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($surveys as $survey)
                              <tr>
                                  <td>{{ $loop->index + 1 }}</td>
                                  <td>{{ $survey->title }}</td>
                                  <td>{{ $survey->description }}</td>
                                  <td>{{ date ('M j, Y', strtotime($survey->created_at)) }}</td>
                                  <td>
                                  <a href="#" class="label label-success">View</a>
                                      | <a href="#" class="label label-warning">Edit</a>
                                      
                                  </td>
                              </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                          <tr>
                              <th>ID</th>
                              <th>Title</th>
                              <th>Description</th>
                              <th>Date</th>
                              <th>Action</th>
                          </tr>
                        </tfoot>
                    </table>
                </div>
              </div>
    </section>


@endsection

@section('script')
  
@endsection