<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    //* Atributos calculados
    public function getFullNameAttribute()
    {
        return "$this->name $this->last_name";
    }

    //* Relaciones
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
