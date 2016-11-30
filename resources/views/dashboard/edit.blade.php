@extends('app')

@section('content')

    
    <div class="center-align">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit {{ $star->name }}'s Star</div>
                    <div class="panel-body">
                        {!! Form::model($star, ['method' => 'PATCH', 'url' => 'stars/' . $star->id]) !!}
                        
                        <p></p>
                            <input type="button" class="btn btn-primary form-control" value="&laquo; Back" onclick="history.back(-1)" />
                        <p></p>

                            @include('partials._form', ['submitBtnText' => 'Update Star'])

                        {!! Form::close() !!}

                        {!! Form::model($star, ['method' => 'DELETE', 'url' => 'stars/' . $star->id]) !!}
                            <button type="submit" class="btn btn-danger btn-mini form-control">Delete</button>

                        
                        {!! Form::close() !!}
                        @include('errors.list')
                    </div>
                </div>
            </div>
    </div>

@stop