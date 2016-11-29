@extends('app')

@section('content')


<div class="center-align">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Details</div>
                <div class="panel-body">
                	{!! Form::open(array('route' => 'getCheckout')) !!}
                        {!! Form::hidden('type','star') !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('donation', 'Donation Amount:') !!}
                            {!! Form::select('donation', ['5' => '5', '10' => '10', '25' => '25', '50' => '50'], '5'); !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('pay', ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                    {!! Form::close() !!}
                    @include('errors.list')
                </div>
            </div>
        </div>
</div>

@stop