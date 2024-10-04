@extends('master')

@section('contents')

    <h2>Editar Livro</h2>
        @if (session()->has('message'))
        {{ session()->get('message') }}
        @endif
        
    <form action="{{ route('books.update', ['book'=>$vetorBookEdit->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" id="PUT">
        <input type="text" name="title" value="{{ old('title'), $vetorBookEdit->title }}" required>
        <input type="text" name="title" value="{{ old('author'), $vetorBookEdit->author }}" required>
        <input type="text" name="title" value="{{ old('genre'), $vetorBookEdit->genre }}" required>
        <input type="text" name="title" value="{{ old('published_year'), $vetorBookEdit->published_year }}" required>
        <button type="submit">ATUALIZAR</button>
    </form>


    @endsection
