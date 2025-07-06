<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cover extends Model
{

    protected $fillable = [
        'image_path',
        'book_id'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
