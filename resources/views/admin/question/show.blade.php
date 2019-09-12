@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Answers</h3>
              </div>
              <div>
                  @include('admin.message.success')
              </div>
              <div class="panel-body">
                <table class="table table-striped table-responsive">
                  <thead>
                      <th>Question</th>
                      <th>Answer(s)</th>
                  </thead>
                  <tbody>

                      <tr>
                            
                      </tr>             
                  </tbody> 
                  <tfoot></tfoot>
                </table>
              </div>
        </div>
    </div>
    
@endsection