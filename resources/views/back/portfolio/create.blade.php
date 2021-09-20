@extends("back.html")

@section("content")
<div style="display: flex; justify-content: center;">
    <form action="{{route("portfolio.store")}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
    <input type="text" name="text" placeholder="text" value="{{ old('text') }}">
    <input type="file" name="img" placeholder="img">
    <button type="submit">Créer</button>
    </form>
</div>
@endsection