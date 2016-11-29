@extends('app')

@section('content')

    <div class="center-align">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All Stars</div>
                    <div class="panel-body">
                        @foreach ($stars as $star)
                            <p>
                                <a href="{{ url('/stars', $star->id) }}">{{ $star->name }} - </a>
                                <a href="{{ url('/stars', $star->id) }}">Details</a> 
                                <a href="{{ url('/stars/' . $star->id . '/edit') }}"> Edit</a>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
    </div>


@stop