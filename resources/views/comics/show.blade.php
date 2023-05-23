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

        <div class="d-flex justify-content-center gap-3">
            <a class="btn btn-primary" href="{{route('comics.edit', $comic)}}">Modifica fumetto</a>
            <div id="delete-button" class="btn btn-danger">Cancella il fumetto</div>
             
        </div>

    </main>

    <div id="delete-modal" class="hidden">
        <div id="delete-modal-inner">
            <p>
                Sei sicuro di voler eliminare il fumetto?
            </p>

            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mx-5">Elimina fumetto</button>
            </form>
            
            <button id="delete-modal-close" class="btn btn-secondary">Chiudi</button>
        </div>
    </div>
@endsection




@section('script')

<script type="text/javascript">
    let deleteButtonEl = document.getElementById('delete-button');
    let deleteModalEl = document.getElementById('delete-modal');
    let deleteModalCloseEl = document.getElementById('delete-modal-close');
    
    deleteButtonEl.addEventListener('click', function(){
        deleteModalEl.classList.remove('hidden');
    });

    deleteModalCloseEl.addEventListener('click', function(){
        deleteModalEl.classList.add('hidden');
    });

</script>
    
@endsection