<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category'; // mac dinh categories
    protected $primaryKey = 'cat_id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    function book()
    {
        return $this->hasMany(Book::class, 'cat_id', 'cat_id');
    }
}
