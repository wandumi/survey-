@extends('admin.layouts.app')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Questions
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Questions</a></li>
      <li class="active">home</li>
    </ol>
  </section>
<section>

<section class="content">
    
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">View Created Question's</h3>

          <div class="box-tools pull-right">
             <a href="{{ route('questions.create') }}" class="btn btn-success">Create New</a> 
            
            {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> --}}
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
                  <div class="col-md-12" style="margin-top: 3%;">
                      <div>
                          @include('admin.message.success')
                      </div>
                      <div >

                      
                        @if(count($questions) > 0 )
                            @foreach($questions as $question)
                                
                                  <div class="panel panel-default ">
                                    <div class="panel-heading">
                                      <h1 class="panel-title" style="padding: 1%;">{{ $question->question }}</h1>
                                    </div>
                                    <div class="panel-body">
                                          {{-- {{ str_limit($question->name, 100 )}} --}}
                                         
                                         <div>
                                            <div><p style="padding-left:1.5%;">Choices</p></div>
                                            <ul>
                                                <li>{{ $question->answer_one }}</li>
                                                <li>{{ $question->answer_two }}</li>
                                                <li>{{ $question->answer_three }}</li>
                                                <li>{{ $question->answer_four }}</li>
                                                <span style="padding-top:2%;">
                                                   <a href="{{ route('questions.edit', $question->id ) }}" class="label label-primary">Edit</a>
                                                      
                                                </span>
                                            </ul>
                                         </div>
                                          
                                    </div>
                                  </div>
                                
                            @endforeach
                        @else
                              <p>There are no Questions</p>
                        @endif
                        
                      </div>

                      <div class="row">
                          <div class="col-md-4 col-md-offset-6">
                              {{ $questions->links() }}
                          </div>
                          
                     </div>
                      
                </div>
              </div>
              
            </div>
            <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>

@endsection

@section('script')
  

@endsection