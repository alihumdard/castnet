<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['section', 'img_url', 'link', 'desc', 'type', 'status', 'created_by'];

    public function uploadLargeLogo($file)
    {
  
        return $this->create([
            'section' => $file['section'] ?? 'Hardcoded Title',
            'img_url' => $file['img_url'] ?? 'Hardcoded Type',
            'link' => $file['link'] ?? 'Hardcoded Description',
            'desc' => $file['desc'] ?? 'Hardcoded Description',
            'type' => $file['type'] ?? 'Hardcoded Description',
            'status' => $file['status'] ?? 'Hardcoded Description',
            'created_by' => $file['created_by'] ?? 'Hardcoded Creator',
            'created_at' => now(),
        ]);
    }
    public function uploadMediumLogo($file)
    {

        return $this->create([
            'section' => $file['section'] ?? 'Hardcoded Title',
            'img_url' => $file['img_url'] ?? 'Hardcoded Type',
            'link' => $file['link'] ?? 'Hardcoded Description',
            'desc' => $file['desc'] ?? 'Hardcoded Description',
            'type' => $file['type'] ?? 'Hardcoded Description',
            'status' => $file['status'] ?? 'Hardcoded Description',
            'created_by' => $file['created_by'] ?? 'Hardcoded Creator',
            'created_at' => now(), 
        ]);
    }
    public function uploadSmallLogo($file)
    {

        return $this->create([
            'section' => $file['section'] ?? 'Hardcoded Title',
            'img_url' => $file['img_url'] ?? 'Hardcoded Type',
            'link' => $file['link'] ?? 'Hardcoded Description',
            'desc' => $file['desc'] ?? 'Hardcoded Description',
            'type' => $file['type'] ?? 'Hardcoded Description',
            'status' => $file['status'] ?? 'Hardcoded Description',
            'created_by' => $file['created_by'] ?? 'Hardcoded Creator',
            'created_at' => now(),
        ]);
    }
    
}




