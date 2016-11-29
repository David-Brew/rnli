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
            {!! Form::submit($submitBtnText, ['class' => 'btn btn-primary form-control']) !!}
        </div>