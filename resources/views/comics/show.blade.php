@extends('layouts/main')

@section('content')
    <main id="comic-show">
        <div class="container">

            <div class="row mb-5">
                <div class="col-4 offset-4">
                    <img id="comic-image" src="{{$comic->thumb}}" alt="img">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-3">Titolo</div>
                <div class="col-9">{{$comic->title}}</div>
            </div>

            <div class="row mb-4">
                <div class="col-3">Descrizione</div>
                <div class="col-9">{{$comic->description}}</div>
            </div>

            <div class="row mb-4">
                <div class="col-3">Prezzo</div>
                <div class="col-9">{{$comic->price}}</div>
            </div>

            <div class="row mb-4">
                <div class="col-3">Serie</div>
                <div class="col-9">{{$comic->series}}</div>
            </div>

            <div class="row mb-4">
                <div class="col-3">Data di Lancio</div>
                <div class="col-9">{{$comic->sale_date}}</div>
            </div>

            <div class="row mb-4">
                <div class="col-3">Tipo</div>
                <div class="col-9">{{$comic->type}}</div>
            </div>
        </div>

        <br>

        <div class="d-flex justify-content-center">
            <a class="btn btn-primary" href="{{route('comics.edit', $comic)}}">Modifica fumetto</a>
            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mx-5">Elimina fumetto</button>
            </form>
             
        </div>

    </main>
@endsection