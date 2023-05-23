@extends('layouts/main')

@section('content')
    <table class="table table-striped">
        <thead>
            <th>
                Titolo
            </th>
            <th>
                Prezzo
            </th>
            <th>
                Serie
            </th>
            <th>
                Data di Lancio
            </th>
            <th>
                Tipo
            </th>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a href="{{route('comics.show', $comic->id)}}">apri</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <hr class="mb-5">

    <div class="container text-center">
        <a class=" btn btn-primary mb-5" href="{{route('comics.create')}}">Aggiungi un fumetto</a>
    </div>

@endsection