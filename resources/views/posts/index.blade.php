@extends('master')

@section('content')
<table class="table table-striped">
<tr>
<th bgcolor="Orange">Title</th><th bgcolor="orange">Contents</th>
<th bgcolor="orange">Category</th>
</tr>
@foreach ($posts as $post)
    
    <tr><td><a href="/posts/{{$post->id}}"> {{$post->title}}</a></td><td>{{str_limit($post->content, 15)}}</td><td>{{$post->category->title}}</td></tr>
@endforeach
</table>
@stop