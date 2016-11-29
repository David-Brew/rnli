@extends('app')

@section('content')

    <h1>{{ $star->name }}</h1>
    
        <p>
            {{ $star->email }}
        </p>
         <p>
            {{ $star->donation }}
        </p>   

@stop