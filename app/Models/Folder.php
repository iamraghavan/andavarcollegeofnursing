<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Folder extends Model
{
    protected $fillable = ['name', 'lug'];
    protected $table = 'webdashboard_folder';
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
