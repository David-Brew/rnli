@extends('app')

@section('content')

    <div class="center-align">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All Stars</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'stars']) !!}

                            @include('partials._form', ['submitBtnText' => 'Create Star'])

                        {!! Form::close() !!}

                        @include('errors.list')
                    </div>
                </div>
            </div>
    </div>
    


@stop