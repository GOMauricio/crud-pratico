@extends('master')

@section('contents')

    <h2>Cadastrar Livro</h2>

    @if (session()->has('message'))
    {{ session()->get('message') }}
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Insira o título do livro">
        <input type="text" name="author" placeholder="Insira o autor do livro">
        <input type="text" name="genre" placeholder="Insira o gênero do livro">
        <input type="text" name="published_year" placeholder="Insira o ano de publicação do livro">
        <button type="submit">REGISTRAR LIVRO</button>
    </form>


@endsection