<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
    public function ebook()
    {
        return $this->hasMany(Ebook::class);
    }
}
