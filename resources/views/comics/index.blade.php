@extends('layouts/main')

@section('content')
    <table class="table table-striped">
        <thead>
            <th>
                Titolo
            </th>
            <th>
                Descrizione
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
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection