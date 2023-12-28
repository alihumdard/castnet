<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Dotlogics\Grapesjs\App\Traits\EditableTrait;
use Dotlogics\Grapesjs\App\Contracts\Editable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model implements Editable
{
    use EditableTrait;
    
    public function getTemplatesPath(){ return 'pages_templates'; }
}
