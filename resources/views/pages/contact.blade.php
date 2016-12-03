@extends('app')

@section('content')

    <div class="center-align">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contact Us</div>
                    <div class="panel-body">
                        @if (! empty($success))
                            <h3 style="color: green; text-align: center;">Message Sent, Thank You</h3>
                        @endif
                        {!! Form::open(['url' => 'contact']) !!}

                            <div class="form-group">
                                {!! Form::label('subject', 'Subject:') !!}
                                {!! Form::text('subject', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('name', 'Name:') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'Email:') !!}
                                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('body', 'Content:') !!}
                                {!! Form::textarea('body', null, ['class' => 'form-control', 'size' => '50x4']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Send', ['class' => 'btn btn-primary form-control']) !!}
                            </div>

                        {!! Form::close() !!}

                        @include('errors.list')
                    </div>
                </div>
            </div>
    </div>

@stop