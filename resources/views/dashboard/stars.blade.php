@extends('app')

@section('content')

    <div class="center-align">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All Stars</div>
                    <div class="panel-body">
                        <div id="star-list">
                            @foreach ($stars as $star)
                                    <div class="item">
                                        <div class="col-xs-4"><a href="{{ url('/stars', $star->id) }}">{{ $star->name }} :</a></div>
                                        <div class="col-xs-4"><a href="{{ url('/stars', $star->id) }}"> Details</a></div>
                                        <div class="col-xs-4"><a href="{{ url('/stars/' . $star->id . '/edit') }}"> Edit</a></div>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </div>


@stop