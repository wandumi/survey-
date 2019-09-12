@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Question
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Question</a></li>
        <li class="active">Create</li>
    </ol>
    </section>
<section>

<section class="content" >
    <div class="row" style="margin-top:1%;">
        <div>
            
        </div>
        <div class="col-md-7 col-md-offset-3">
                <h2 style="text-align:center; font-weight:500;">Create New Question</h2>
                <div class="box">
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div>
                                    @include('admin.message.errors')
                                </div>


                                <form method="POST" action="{{ route('questions.store') }}">
                                    @csrf
                                    
                                    <div class="form-group">
                                        <label for="survey">Survey Name</label>
                                        <select name="survey[]" id="survey" class="form-control">
                                            @foreach($surveys as $survey)
                                                <option value="{{ $survey->id }}">{{ $survey->title }}</option>
                                            @endforeach 
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Question</label>
                                        <input type="text" name="question" class="form-control" value={{ old('question') }}>
                                        
                                    </div>          
                                    
                                    <div class="form-group">
                                        <label for="type" >Answers</label><br><br>
                                            <input type="text" class="form-control" name="answer_one" value="{{ old('answer_one') }}">
                                    </div>
                                    <div class="form-group">
                                            <input type="text" class="form-control" name="answer_two" value="{{ old('answer_two') }}">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="answer_three" value="{{ old('answer_three') }}">
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class="form-control" name="answer_four" value="{{ old('answer_four') }}">
                                    </div>
                                        
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                                    </div>
                                    <div class="form-group">
                                        <a href="{{ url('questions') }}" class="btn btn-primary btn-block">Back</a>
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