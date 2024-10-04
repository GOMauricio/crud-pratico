@extends('master')

@section('contents')

<a href="{{route ('books.create')}}"> Cadastrar Livro </a>

<hr>

<h2>Livros</h2>

<ul>
    @if($books && count($books) > 0)
        @foreach ($books as $book)
            <li>
                {{ $book->title }} |
                <a href="{{ route('books.edit', ['book' => $book->id]) }}">Editar informações</a> |
                <a href="{{ route('books.show', ['book'=> $book->id])}}">Deletar</a>
            </li>
</ul>
        @endforeach
    @else
        <li>Nenhum livro encontrado no banco de dados.</li>
    @endif
    
@endsection