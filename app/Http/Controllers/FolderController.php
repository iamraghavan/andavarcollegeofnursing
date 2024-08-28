<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use App\Models\Image;

class FolderController extends Controller
{
    public function index()
    {
        $folders = Folder::all();
        return view('pages.gallery.gallery', compact('folders'));
    }

    public function show($id)
    {
        $folder = Folder::find($id);
        $images = Image::where('folder_id', $id)->get();
        return view('pages.gallery.folder', compact('folder', 'images'));
    }
}
