@extends('master.app')

@section('scripts')

@stop

@section('content')

  @foreach($articles as $a)

    <p>{!! $a->title !!}</p>
    <p>{!! $a->body !!}</p>
    <p />

  @endforeach

@stop
