@extends('app')

@section('content')

    <h1>Edit {{ $star->name }}'s Star</h1>
    
    {!! Form::model($star, ['method' => 'PATCH', 'url' => 'stars/' . $star->id]) !!}

        @include('partials._form', ['submitBtnText' => 'Update Star'])

    {!! Form::close() !!}

    {!! Form::model($star, ['method' => 'DELETE', 'url' => 'stars/' . $star->id]) !!}
        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
    {!! Form::close() !!}

    @include('errors.list')

@stop