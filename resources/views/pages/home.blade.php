@extends('layouts/app')



@section('content')

    @include('partials._stars')

<div id="home-footer">

    <div class="col-sm-6 col-xs-12">
        <div id="star-search"> 
            
            <div id="suggest"><div id="txtHint"></div></div>
            <form>
                <input type="hidden" id="token" value="{{ csrf_token() }}">
                <input id="search-field" type="text" value="Enter Full Name" onkeyup="showHint(this.value)" autocomplete="off" onfocus="if (this.value == 'Enter Full Name') {this.value = '';}" onblur="if (this.value == '') {} ">
            </form>
            <p id="title-search">Star Search</p>
            

        </div>
    </div>
    <div class="col-sm-6 col-xs-12">
        <div id="star-sponsor"> 
            <a href="/sponsor">
                <img width="90" height="auto" alt="" src="/img/logo.png" typeof="foaf:Image">
            </a>
            <a href="/sponsor">Sponsor your Star</a>
        </div>
    </div>
    
</div>


<!--{!! Form::open() !!}        
            
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        
{!! Form::close() !!}-->


@stop