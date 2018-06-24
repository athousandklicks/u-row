@extends('Layout')


@section('title', '| U-ROW Automobiles')


@section('content')
<div class="row">
	<div class="top-space1">
            </div>
    <div class="col-md-6 col-lg-offset-3 col-md-offset-3 padding-right-none xs-padding-left-none sm-padding-left-none xs-margin-top-30">
        <h3>Shipping Info</h3>

        {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

        <div class="form-group">
            {{ Form::label('town', 'Town') }}
            {{ Form::text('town', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('city', 'City') }}
            {{ Form::text('city', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('state', 'State') }}
            {{ Form::text('state', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('country', 'Country') }}
            {{ Form::text('country', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Proceed to Payment', array('class' => 'button success')) }}
        {!! Form::close() !!}
    </div>


</div>


@endsection