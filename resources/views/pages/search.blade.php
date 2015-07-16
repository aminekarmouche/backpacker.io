@extends('layouts.default')

@section('content')
    <h1>Search for a new item!</h1>
    <hr/>
    <div class="container row">
    <div class="col-sm-6">




        {!! Form::open(['url' => 'articles']) !!}

        <div class="form-group">
            {!! Form::label('departure', 'Departure') !!}
            {!! Form::select('departure', $cities) !!}
        </div>

        <div class="form-group">
            {!! Form::label('destination','Destination') !!}
            {!! Form::select('destination', $cities) !!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('date', 'Date') !!}
            {!! Form::text('date', null, array('type' => 'text',
                                                'class' => 'form-control datepicker',
                                                'placeholder' => 'Pick the date this task should be completed',
                                                'id' => 'calendar')) !!}

        </div>
    </div>
        <div class='form-group'>
            {!! Form::submit('Search', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop
