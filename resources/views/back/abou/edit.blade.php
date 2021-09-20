@extends("back.html")

@section("content")
<form enctype="multipart/form-data" action="{{route("abou.update", $abou->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
    <input type="text" name="text1" value="{{$abou->text1}}">
    <input type="text" name="text2" value="{{$abou->text2}}">
    </div>
    <div style="display: flex; justify-content:center;">
    <button type="submit">Update</button>
    </div>
@endsection