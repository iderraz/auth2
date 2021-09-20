@extends("back.html")
@section("content")


<a href="portfolio/create">Créer Portfolio</a>
<div style="display: flex; justify-content:center; flex-direction:row">
    @foreach ($portfolio as $item)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$item->id}}</h5>
          <h5 class="card-title">{{$item->name}}</h5>
          <h5 class="card-text">{{$item->text}}</h5>
          <a href="{{route("portfolio.edit", $item->id)}}">Edit</a>
          <a href="{{route("portfolio.show", $item->id)}}">Show</a></button>
          <form action="{{route("portfolio.destroy", $item->id)}}" method="POST">
            @method('delete')
            @csrf
            <button class="btn-danger" type="submit">Delete</button>
            </form>
        </div>
      </div>
    @endforeach
</div>



@endsection