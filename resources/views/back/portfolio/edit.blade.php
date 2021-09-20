@extends("back.html")

@section("content")
<form enctype="multipart/form-data" action="{{route("portfolio.update", $portfolio->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
    <input type="text" name="name" value="{{$portfolio->name}}">
    <input type="text" name="text" value="{{$portfolio->text}}">
    <input type="file" name="img" value="{{$portfolio->img}}">
    </div>
    <div style="display: flex; justify-content:center;">
    <button type="submit">Update</button>
    </div>

</form>
@endsection