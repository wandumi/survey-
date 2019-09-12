@extends('admin.layouts.app')



@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

      <!-- Main content -->
      <section class="content">
       
  
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Surveys</h3>
                  </div>
                  <div>
                      @include('admin.message.success')
                      @include('admin.message.errors')
                  </div>
                  <div class="panel-body">
                    
                    @if($surveys->isEmpty())
                        <p>There are no surveys</p>
                    @else
                        @foreach($surveys as $survey)
                            <li class="list-group-item">
                                <a href="/survey/{{ $survey->id }}">{{ $survey->title }}</a>
                                <span>
                                   {{-- @foreach($survey->question as $question)
                                       
                                       @if($number = $question->pluck('id'))
                                            {{ $number }}
                                       @endif
                                   @endforeach --}}
                                </span>
                            </li>
                        @endforeach
                    @endif
                  
                  </div>
              </div>
            </div>
            


        </div>

        
      </section>
      <!-- /.content -->
  
  </section>


@endsection

@section('chartsscripts')


@endsection