<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\DB;
use App\User;
use App\Http\Requests;


class TestController extends Controller
{
    public function index(Request $request)
    {
        $items = User::all();
        //table('people')->get();
        //$items = User::table('users')->get();
        //all();
        return view('hello.index', ['items' => $items]);
    }
}
