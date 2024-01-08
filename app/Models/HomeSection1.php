<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection1 extends Model
{
    public $table = 'homesection1';
    use HasFactory;

    protected $guarded = ['id']; 
}
