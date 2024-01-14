<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false; // Không sử dụng 'updated_at'
    protected $fillable = ['id', 'name', 'img', 'price'];

}
