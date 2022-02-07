<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BlogController extends Controller
{
    public function test(){
        phpinfo();
    }

    public function index(){
        return view('user.editor.editor');
    }

    public function createLine(Request $request){
        try {
//            $num_line = intval($request->num_line);
            $num_line = 1;
            $returnHTML = view('user.editor.editor_line',compact('num_line'))->render();
            return response()->json([
                'success' => true,
                'content' => $returnHTML
            ]);
        }catch(\Exception $e){
            return response()->json(['success'=>false]);
        }


    }

    public function setCache(){
//        $user = \Auth()->user();
//        $test = Cache::remember('user-test-'.$user->id, Carbon::now()->addMinutes(30), function() use ($user){
//
//        });
        $value = Cache::get('key');
        dd($value);
    }

    public function getCache(){
        $user = \Auth()->user();
//        $test = Cache::remember('user-test-'.$user->id, Carbon::now()->addMinutes(30), function() use ($user){
//
//        });

        Cache::store('redis')->put('bar', 'baz', 600);
    }





}
