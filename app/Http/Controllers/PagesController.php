<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //

    public function usersList()
    {
        $users = DB::select('select name from users');

        return view('users', compact('users'));
    }    

    public function addUser()
    {
        $insertString = 'insert into users(name) values(\'' . request('name') . '\')';
        DB::insert($insertString);
        $users = DB::select('select name from users');

        return view('users', compact('users'));
    }  
}
