<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadMap extends Model
{
    use HasFactory;
        
    protected $fillable = ['title', 'desc','created_by'];

    public static $rules = [
        'title' => 'required|string|max:255',
        'desc' => 'required|string|max:4294967295',
    ];
}
