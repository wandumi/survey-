@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Survey
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('survey') }}"><i class="fa fa-dashboard"></i> Survey</a></li>
        <li class="active">Create</li>
    </ol>
    </section>
<section>

<section class="content">
    <div class="row" style="margin-top:5%;">
        <div>
            
        </div>
        <div class="col-md-7 col-md-offset-3">
                <h2 style="text-align:center; font-weight:500;">Create New Survey</h2>
                <div class="box">
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div>
                                    @include('admin.message.errors')
                                </div>
                                <form method="POST" action="{{ route('survey.store') }}">
                                    @csrf
                                    
                                    <div class="form-group">
                                        <label for="title">Survey Title</label>
                                        <input type="text" name="title" class="form-control" value={{ old('title') }}>
                                        
                                    </div>          
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                                    </div>
                                    <div class="form-group">
                                        <a href="{{ url('survey') }}" class="btn btn-primary btn-block">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
        </div>
    </div>
   
</section>
@endsection