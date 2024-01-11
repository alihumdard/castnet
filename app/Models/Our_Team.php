<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Our_Team extends Model
{
    protected $table = 'our_teams';
    use HasFactory;
    protected $guarded = ['id'];
}
