@extends("back.html")

@section("content")
<div style="display: flex; justify-content:center; flex-direction:row">
    @foreach ($contact as $item )
    <div style="display: flex; justify-content:center; align-items:center; flex-direction:column; margin:5px">
        <p>ID = {{$item->id}}</p>
        <p style="text-align: center">Nom du réseau : {{$item->name}}</p>
        <p>Lien du réseau : {{$item->url}}</p>
        <button class="btn-success"><a href="{{route("contact.edit", $item->id)}}">Edit</a></button>
    </div>  
    @endforeach
</div>
@endsection