<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Principle extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'heading', 'desc','created_by'];

    public static $rules = [
        'title' => 'required|string|max:255',
        'heading' => 'required|string|max:65535',
        'desc' => 'required|string|max:4294967295',
    ];
}
