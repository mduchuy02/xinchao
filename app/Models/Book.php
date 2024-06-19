<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book'; // mac dinh categories
    protected $primaryKey = 'book_id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;



    // 1 book thuoc (belong to ) category
    function category()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'cat_id');
    }
}
// 1 category co nhieu book
