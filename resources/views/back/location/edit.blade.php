@extends("back.html")



@section("content")
<form enctype="multipart/form-data" action="{{route("location.update", $location->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
    <input type="text" name="text1" value="{{$location->text1}}">
    <input type="text" name="text2" value="{{$location->text2}}">
    </div>
    <div style="display: flex; justify-content:center;">
    <button type="submit">Update</button>
    </div>
@endsection