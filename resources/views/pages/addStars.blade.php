@extends('app')

@section('content')

@if (! empty($id))
    
        <div id="add-star"> 
            
                <img id="add-em" width="90" height="auto" alt="" src="/img/logo.png" typeof="foaf:Image">
            
            <p>Add Starr</p>
        </div>


        <div id="text-box">
          <p>Thank you {{ $star->name }}</p>
        </div>


         <svg id="sparkle-add"  width="120" height="120" viewBox="0 0 100 100">
          <g class="group" opacity="0.8">
            <g class="large">
              <path id="large" d="M41.25,40 L42.5,10 L43.75,40 L45, 41.25 L75,42.5 L45,43.75
                                  L43.75,45 L42.5,75 L41.25,45 L40,43.75 L10,42.5 L40,41.25z " fill="white" />
            </g>
            <g class="large-2" transform="rotate(45)">
              <use xlink:href="#large" />
            </g>
            <g class="small">
              <path id="small" d="M41.25,40 L42.5,25 L43.75,40 L45,41.25 L60,42.5 L45,43.75
                                  L43.75,45 L42.5,60 L41.25,45 L40,43.75 L25,42.5 L40,41.25z" fill="white" />
            </g>
          </g>
        </svg>

@endif

@stop