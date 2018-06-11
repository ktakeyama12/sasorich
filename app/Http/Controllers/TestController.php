<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class TestController extends Controller
{
    public function index(Request $request)
    {
        $user = User::all();
        $items = $user->test()->orderBy('created_at', 'desc')->paginate(10);
       
        //table('people')->get();
        //$items = User::table('users')->get();
        //all();
        return view('hello.index', ['items' => $items]);
    }
    
    public function index2(Request $request)
    {
        $categories = User::all();
        //table('people')->get();
        //$items = User::table('users')->get();
        //all();
        return view('hello.index2', ['categories' => $categories]);
    }
    
}
