<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // public function index(){
    //     return view('index');
    // }
    public function post(){
        $post = post::all();
        return view('index',['data' =>$post]);
}
}
