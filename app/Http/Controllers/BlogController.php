<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function test(){

        $message = 'privet';

        $example = function () use(&$message){
          var_dump($message);
        };

        $example();



    }

    public function index(){

        try {
            $blogs = Blog::get();

            return view('main.index',compact('blogs'));
        }catch(\Exception $e){
            return $e->getMessage();
        }

    }

    public function getStory($slug){

        try {
              $story = Blog::where('slug_name',$slug)->first();
              return view('main.blog',compact('story'));
        }catch(\Exception $e){
            return $e->getMessage();
        }


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

    public function saveStory(Request $request){
        dd($request->all());
        try {


        }catch(\Exception $e){
            return response()->json(['success'=>false]);
        }

    }

    private $min = 1;
    public function setCache(){

        $user = \Auth()->user();

        $myArr = array("John", "Mary", "Peter", "Sally");
        \Cache::put('user-editor-'.$user->id,json_encode($myArr), now()->addMinutes(10));
//        \Cache::put('test2',20, now()->addMinutes(10));
//        \Cache::put('test3',30, now()->addMinutes(10));
//
//        Cache::flush();
//        $value = \Cache::get('test2');
//        dd($value);

//        Cache::store('redis')->put('bar', 'baz', 600);

//        $sites = Cache::remember('sites_user-1', Carbon::now()->addMinutes($this->min), function () use ($user) {
//            return DB::table('users')->get();
//        });
//
//        dd($sites);

    }

    public function getCache(){
        $user = \Auth()->user();
//        $test = Cache::remember('user-test-'.$user->id, Carbon::now()->addMinutes(30), function() use ($user){
//
//        });

        $value = Cache::get('key');
        dd($value);
    }





}
