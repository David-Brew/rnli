@extends('app')

@section('content')

    {{ $first }} {{ $second }} says hello world! <br>

@stop

@section('footer')

    @if ($first == 'David')
        gdgdgdd
    @endif

@stop
