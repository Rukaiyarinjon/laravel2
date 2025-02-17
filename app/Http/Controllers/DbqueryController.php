<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use Illuminate\Http\Request;

class DbqueryController extends Controller
{
    public function index()
    {
        $users = DB::table('db')->get();
 
        return view('data.index', ['users' => $users]);
    }
}
