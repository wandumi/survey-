@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div>
                  @include('admin.message.success')
              </div>
              <div class="panel-heading">
                  @foreach($surveys as $survey )
                  <h3 >  {{ $survey->title }}</h3>
                  
              </div>
              
              <div class="panel-body">
                
                            @foreach($survey->question as $question)

                              <div class="list-group">
                                  <a href="#" class="list-group-item active">
                                    <h4 class="list-group-item-heading">Q : {{ $question->question }}</h4>
                                    <p class="list-group-item-text">
                                        <table class="table table-responsive">
                                            <thead>
                                                
                                                  <th>User</th>
                                                  <th>Answer</th>
                                                
                                            </thead>
                                            @foreach($question->answers as $answer)
                                              
                                                <tr>
                                                  <td>{{ ucwords($answer->user_id == 1 ? "admin" : "user" ) }}</td>
                                                  <td>{{ $answer->answers }}</td>
                                                </tr>
                                            @endforeach  
                                        </table>
                                         
                                    </p>
                                  </a>
                                </div>

                              
                              @endforeach 
                            
                      @endforeach 

              </div>
              <div>
                 <a href="{{ route('home') }}" class="btn btn-block btn-primary">Back</a>
              </div>
        </div>
    </div>
@endsection