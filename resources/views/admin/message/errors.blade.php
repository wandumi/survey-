{{-- @if(isset($errors) && count($errors) > 0)
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span arial-hidden="true">&times;</span>
        </button>
        @foreach($errors->all() as $error)
            <li class="alert alert-danger">{!! $error !!}}</li>
        @endforeach
    </div>
@endif --}}

@if (session('errors'))
    <div class="alert alert-danger">
        {{ session('errors') }}
    </div>
@endif


