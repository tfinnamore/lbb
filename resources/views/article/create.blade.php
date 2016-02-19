@extends('master.app')

@section('scripts')

<script src="//cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link href="/assets/select2/select2.min.css" rel="stylesheet" />
<script src="/assets/select2/select2.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('.tags').select2({tags: true })

});

</script>

@stop

@section('content')

{!! Form::open(['url' => '/article/store']) !!}

  {!! Form::label('title','Title') !!}
  {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}

  {!! Form::label('body','Add an Article') !!}
  {!! Form::textarea('body', old('body'), ['class' => 'ckeditor form-control']) !!}

  {!! Form::label('tags','Tags') !!}
  {!! Form::select('tags[]', [], null, ['class' => 'form-control tags', 'multiple' => 'multiple']) !!}

  {!! Form::submit('Save', ['class' => 'btn btn-default']) !!}

{!! Form::close() !!}
@stop
