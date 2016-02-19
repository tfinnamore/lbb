@extends('master.app')

@section('scripts')

@section('content')

<ul>
@foreach($articles as $a)

  <li>{{ $a->title }}</li>

@endforeach

</ul>
@stop
