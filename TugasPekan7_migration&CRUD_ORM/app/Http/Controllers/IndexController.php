<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('page.home');
    }

    public function tables()
    {
        return view('page.data-tables');
    }
}
 