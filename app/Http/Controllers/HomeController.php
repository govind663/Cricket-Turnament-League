<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $users = DB::table('users')->get();
        return view('Backend.index')->with('users', $users);
    }
}
