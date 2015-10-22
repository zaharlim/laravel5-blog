@extends('master')

@section('content')
{!! Form::open(['route'=>'posts.store']) !!}

@include('errors._validation')
<legend>New Post</legend>
<div class="form-group">
    {!! Form::label('title', 'Post Title') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

<div>
	{!! Form::label('content', 'Post Content') !!}
    {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Category') !!}
    {!! Form::select('category_id', \App\Category::lists('title','id'),null, ['placeholder' => 'Pick Category', 'class'=>'form-control']) !!}
</div>
	{!! Form::submit('Update', ['class'=>'btn btn-success']) !!}    
{!! Form::close() !!}
@stop
