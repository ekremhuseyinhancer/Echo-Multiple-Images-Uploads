<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class EchoMultipleImagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        foreach($request->input('document', []) as $file) {
            //your file to be uploaded
             dd($request);
        }
    }

    public function uploads(Request $request)
    {
        $path = storage_path('tmp/uploads');

        $file = $request->file('file');

        $name = time(). "-". $file->getClientOriginalName();

        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }
}
