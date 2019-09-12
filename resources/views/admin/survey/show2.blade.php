@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
            Questions
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('survey') }}"><i class="fa fa-dashboard"></i>Questions</a></li>
        <li class="active">Show</li>
    </ol>
    </section>
<section>

<section class="content">
    
        <div class="row " >

            <div class="col-md-8 col-md-offset-2" style="margin-top:2%;">
                <div style="margin-bottom:3%;"><h2 style="text-align: center;">{{ $survey->title }}</h2>
                    {{-- <span>{{ $survey->id }}</span> --}}
                    <div>
                        
                    </div>
                </div>
                <div>
                    @include('admin.message.errors')
                </div>
                <div>
                    {{--<form action="{{ route('answer.store', $survey->id ) }}" method="Post" >--}}
                    <form action="{{ route('answer.store') }}" method="POST" >
                       @csrf
                       <input type="hidden" name="survey_id" value="{{ $survey->id}}">
                        <div>
                            @foreach($survey->question as $question)

                                <div>
                                    <input type="hidden" name="question_id[]" value="{{ $question->id}}">
                                   
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h2 class="panel-title" style="padding:10px;">{{ $question->question }}</h2>
                                    </div>
                                    <div class="panel-body">
            
                                            <li class="list-group-item">
                                                    
                                                    <div class="form-group">
                                                        <label for="type" >Answers</label><br><br>
                                                            <!-- radio -->
                                                        
                                                            <label>
                                                                <input type="radio" name="r2" class="minimal-red[]"> {{ $question->answer_one }}
                                                            </label><br>
                                                            <label>
                                                                <input type="radio" name="r2" class="minimal-red[]"> {{ $question->answer_two }}
                                                            </label><br>
                                                            <label>
                                                                <input type="radio" name="r2" class="minimal-red[]"> {{ $question->answer_three }}
                                                            </label><br>
                                                            <label>
                                                                <input type="radio" name="r2" class="minimal-red[]"> {{ $question->answer_four }}
                                                            </label><br>
                                                            

                                                    </div>

                                                    
                                                </li>
                                    
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">Submit</button>
                            </div>
                            <div class="form-group">
                                <a href="{{ url('home') }}" class="btn btn-primary btn-block">Back</a>
                            </div>
                    </form>
                </div>
                
        </div>

</section>
@endsection