<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    protected $table = 'publisher'; // mac dinh categories
    protected $primaryKey = 'pub_id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;


    // Mass assigment
    protected $fillable = ['pub_id','pub_name'];
}
