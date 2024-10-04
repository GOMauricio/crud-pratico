<?php

//Repositórios são usados para tratar/interagir com BDs

namespace App\Repositories;
use App\Models\Book;

class BookRepository {
    protected $book;

    public function __construct(Book $book){
        $this->book = $book;
    }
    
    public function all(){
        return $this->book->all();
    }

    public function find($id){
        return $this->book->find($id);
    }

    public function create(array $data){
        return $this->book->create($data);
    }

    public function update($id, array $data){
        return $this->book->where('id', $id)->update($data);
    }

    public function delete($id){
        return $this->book->destroy($id);
    }
}
