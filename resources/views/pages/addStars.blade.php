@extends('app')

@section('content')

    <h1>Success</h1>
<p>{{ $id }}</p>

@if (! empty($id))
    <p>Payment Successful</p>
@endif

@stop