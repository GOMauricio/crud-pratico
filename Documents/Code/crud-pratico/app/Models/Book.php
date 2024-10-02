<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


// Definição dos componentes do BD, sendo as colunas referentes a cada livro

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'genre',
        'published_year',
        'isbn',
    ];
}
