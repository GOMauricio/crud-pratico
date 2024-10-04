@extends('master')

@section('contents')

    <h2>Livro: {{ $vetorBook->title }}</h2>

    <form action="{{ route('books.destroy',['book'=>$vetorBook->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">DELETAR</button>

    </form>

@endsection    