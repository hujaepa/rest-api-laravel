<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ModelAssetController extends Controller
{
    public function load3d()
    {
        
        // $path = Storage::path('godzilla3d/scene.gltf');
        // if(file_exists($path))
        $app = env('APP_URL');
        $path = Storage::disk('public')->url('godzilla3d/scene.gltf');
        // $path = Storage::url('godzilla3d/scene.gltf');
        return response()->json(["model" => $path, "url_app" =>$app]);
    
    }
}
