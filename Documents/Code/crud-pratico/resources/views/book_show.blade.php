@extends('master')

@section('contents')

    <h2>Livro: {{  }}</h2>

    <form action="{{ route('books.destroy',['book'=>]) }}" method="POST">
        @csrf

    </form>

@endsection    