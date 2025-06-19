<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function cover()
    {
        return $this->hasOne(Cover::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
