@extends('app')

@section('content')

    <div class="center-align">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $star->name }}</div>
                    <div class="panel-body">
                        <h4>
                            {{ $star->name }}'s Email: <?php echo "<a href='mailto:" . $star->email . "' target='_top'>" . $star->email . "</a>"; ?>
                        </h4>
                         <h4>
                            Donation Ammount: {{ $star->donation }} Euro
                        </h4> 
                        <p></p>
                        
                        <input type="button" class="btn btn-primary form-control" value="&laquo; Back" onclick="history.back(-1)" />
                        <p></p>
                        <a href="{{ url('/stars/' . $star->id . '/edit') }}"><input type="button" class="btn btn-primary form-control" value="Edit"/></a>
                    </div>
                </div>
            </div>
    </div>
    


@stop