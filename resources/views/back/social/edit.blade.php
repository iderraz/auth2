@extends("back.html")



@section("content")
<form enctype="multipart/form-data" action="{{route("contact.update", $contact->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
    <input type="text" name="name" value="{{$contact->name}}">
    <input type="text" name="url" value="{{$contact->url}}">
    </div>
    <div style="display: flex; justify-content:center;">
    <button type="submit">Update</button>
    </div>
@endsection