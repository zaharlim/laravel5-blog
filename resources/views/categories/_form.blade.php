@extends('master')

@section('content')
{!! Form::open(['route'=>'categories.store']) !!}

@include('errors._validation')
<legend>New Category</legend>
<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

	{!! Form::submit('Save', ['class'=>'btn btn-success']) !!}    
{!! Form::close() !!}
@stop
