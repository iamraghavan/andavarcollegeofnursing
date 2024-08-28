<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Folder;

class Image extends Model
{
    protected $fillable = ['name', 'file', 'firebase_url', 'folder_id'];
    protected $table = 'webdashboard_image';

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }
}
