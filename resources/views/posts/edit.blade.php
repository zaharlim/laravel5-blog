@extends('master')

@section('content')
	{!! Form::model($post, array('route' => array('posts.update', $post->id),'method'=>'put')) !!}
	@include('errors._validation')
<legend>Edit Post</legend>
@include('posts._form')
	{!! Form::submit('Update', ['class'=>'btn btn-success']) !!}    
}
{!! Form::close() !!}
@stop
