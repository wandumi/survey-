@extends('admin.layouts.app')

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">
                <h3 >Surveys Results</h3>
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
                            <a href="/resultall/{{ $survey->id }}">{{ $survey->title }}</a>
                        </li>
                    @endforeach
                @endif
              
              </div>
          </div>
        </div>
    </div> 
@endsection