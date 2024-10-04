<?php

namespace App\Http\Controllers;
use App\Services\BookService;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    // Chama a função index, que expõe a página books
    public function index()
    {
        $books = $this->bookService->bookAll();
        return view('books', ['books'=>$books]);
    }

    // Chama a função para criar um livro, por meio da view "create"
    public function create()
    {
        return view('book_create');
    }

    public function store(Request $request)
    {
        // Variável recebe todas as informações referentes ao livro, no formato do banco de dados
        // E também com informações pertinentes, previamente adicionadas ao Model Book.
        $created = $request->only(['title', 'author','genre', 'published_year']);

        // Passa para a função createBook, do bookService, a variável com as informações recebidas
        $this->bookService->createBook($created);

        if($created){
            return redirect()->back()->with('message', 'Livro Cadastrado com Sucesso');
        }
        else{
            return redirect()->back()->with('message', 'Erro ao cadastrar.');
        }
    }

    // Traz o detalahamento dos livros na view "show".
    public function show(string $id)
    {
        $books = $this->bookService->findBook($id);
        return view('book_show', ['vetorBook' => $books]);
    }

    // Permite que as informações de determinados livros sejam editadas.
    public function edit(string $id)
    {
        $book = $this->bookService->findBook($id);
        return view('book_edit', ['vetorBookEdit'=>$book]);
    }

    // Efetiva o update da atualização da função edit.
    public function update(Request $request, string $id)
    {
        $updated = $this->bookService->updateBook($id, $request->except(['_token', '_method']));
        if($updated){
            return redirect()->back()->with('message', 'Informações atualizadas com sucesso');
        }
        else{
            return redirect()->back()->with('message', 'Erro ao atualizar.');
        }
    }

    // Apaga informações referentes aos livros diretamente do banco de dados
    public function destroy(string $id)
    {
        $this->bookService->deleteBook($id);

        return redirect()->route('books.index');
    }
}
