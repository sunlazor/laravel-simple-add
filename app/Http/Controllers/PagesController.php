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
}
