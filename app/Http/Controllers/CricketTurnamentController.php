<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CricketTurnamentController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Home()
    {
        $users = DB::table('users')->get();
        return view('Backend.index')->with('users', $users);
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Error_404()
    {
        $users = DB::table('users')->get();
        return view('Backend.404')->with('users', $users);
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Account()
    {
        $users = DB::table('users')->get();
        return view('Backend.account')->with('users', $users);
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Help()
    {
        $users = DB::table('users')->get();
        return view('Backend.help')->with('users', $users);
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Settings()
    {
        $users = DB::table('users')->get();
        return view('Backend.settings')->with('users', $users);
    }



    /**
     * Write code on Method
     *
     * @return response()
     */
    public function CSK()
    {
        $users = DB::table('users')->get();
        return view('Backend.Team Profile.csk')->with('users', $users);
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function DC()
    {
        $users = DB::table('users')->get();
        return view('Backend.Team Profile.dc')->with('users', $users);
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function KKR()
    {
        $users = DB::table('users')->get();
        return view('Backend.Team Profile.kkr')->with('users', $users);
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function MI()
    {
        $users = DB::table('users')->get();
        return view('Backend.Team Profile.mi')->with('users', $users);
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function RCB()
    {
        $users = DB::table('users')->get();
        return view('Backend.Team Profile.rcb')->with('users', $users);
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Player_Profile()
    {
        $users = DB::table('users')->get();
        return view('Backend.Team Profile.player-profile')->with('users', $users);
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Venu()
    {
        $users = DB::table('users')->get();
        return view('Backend.venu')->with('users', $users);
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function List_Match()
    {
        $users = DB::table('users')->get();
        return view('Backend.list-match')->with('users', $users);
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Match_List()
    {
        $users = DB::table('users')->get();
        return view('Backend.match-summary')->with('users', $users);
    }
}
