@extends('master')

@section('content')
<table class="table table-striped">
<tr style="background:orange;">
<th>Nama</th>
<th>No.Kad Pengenalan</th>
<th>No.Telefon</th>
<th>Email</th>
<th>Action</th>
</tr>
@foreach ($posts as $post)
    
    <tr>
    <td><a href="/posts/{{$post->id_CALUN}}"> {{$post->NAMA}}</a></td>
    <td>{{str_limit($post->NOKP, 15)}}</td>
    <td>{{$post->NO_TEL_PELAJAR}}</td>
    <td>{{$post->EMAIL}}</td>
    <td>
   {!! Form::model($post, array('route' => array('posts.destroy', $post->id),'method'=>'delete')) !!}
    <a href="{{route('posts.edit',['posts'=>$post->id_CALUN])}}">Edit</a>
    {!! Form::submit('Delete', ['class'=>'btn btn-sm btn-danger js-submit-confirm']) !!}    

	{!! Form::close() !!}

    </td>
    </tr>
@endforeach
</table>
{!!$posts->render()!!}
@stop