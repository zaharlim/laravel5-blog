@extends('master')

@section('content')

<table class="table table-striped">
<tr>
<th width="20">Title</th>


{{--<th>Contents</th>
<th>Category</th>
<th>Action</th>--}}
</tr>
@foreach ($categories as $category)
    
    <tr>
    <td><a href="/categories/{{$category->id}}"> {{$category->title}}</a></td>
    <!--<td>{{str_limit($category->content, 15)}}</td>-->
    {{--<td>{{$category->category->title}}</td> --}}
    <td>
   {!! Form::model($category, array('route' => array('categories.destroy', $category->id),'method'=>'delete')) !!}
    <a href="{{route('categories.edit',['categories'=>$category->id])}}">Edit</a>
    {!! Form::submit('Delete', ['class'=>'btn btn-sm btn-danger js-submit-confirm']) !!}    

	{!! Form::close() !!}

    </td>
    </tr>
@endforeach
</table>
@stop