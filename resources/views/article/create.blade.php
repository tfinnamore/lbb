@extends('master.app')

@section('content')

{!! Form::open(['url' => '/article/store']) !!}

  {!! Form::label('test','Label for Test') !!}
  {!! Form::text('test') !!}

  {!! Form::submit('Cleeeeeek!') !!}

{!! Form::close() !!}
@stop
