<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function index(){

        return view('user.editor.editor2');
    }

    public function publish(Request $request){
        $files= $request->files;
        foreach ($files as $file){
            dd($file->getClientOriginalExtension());
        }


    }



}
