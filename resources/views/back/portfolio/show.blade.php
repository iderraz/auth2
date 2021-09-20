@extends("back.html")


@section("content")
<span>{{$portfolio->id}}</span>
<span>{{$portfolio->name}}</span>
<span>{{$portfolio->text}}</span>
<span>{{$portfolio->img}}</span>
@endsection