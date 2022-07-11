<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RssController extends Controller
{
    // public function awal()
    // {
    //     $index = DB::table('rss')->get();
    //     $index2 = DB::table('news')-> where ('rss_id','1')-> limit (15)->orderBy('id', 'DESC')->get();
    //     return view('index', ['index'=>$index,'index2'=>$index2]);
    // }

    public function france()
    {
        $index = DB::table('rss')->get();
        $index2 = DB::table('news')-> where ('rss_id','1')-> limit (15)->orderBy('id', 'DESC')->get();
        return view('france', ['index'=>$index,'index2'=>$index2]);
    }
    public function germany()
    {
        $index = DB::table('rss')->get();
        $index2 = DB::table('news')-> where ('rss_id','2')-> limit (15)->orderBy('id', 'DESC')->get();
        return view('france', ['index'=>$index,'index2'=>$index2]);
    }
    public function newzeland()
    {
        $index = DB::table('rss')->get();
        $index2 = DB::table('news')-> where ('rss_id','3')-> limit (15)->orderBy('id', 'DESC')->get();
        return view('france', ['index'=>$index,'index2'=>$index2]);
    }
    public function korea()
    {
        $index = DB::table('rss')->get();
        $index2 = DB::table('news')-> where ('rss_id','4')-> limit (15)->orderBy('id', 'DESC')->get();
        return view('france', ['index'=>$index,'index2'=>$index2]);
    }
}
