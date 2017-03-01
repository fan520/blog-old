<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //

    public function index()
    {

        return view('Admin.index');
    }
    public function top()
    {

        return view('Admin.top');
    }
    public function menu()
    {

        return view('Admin.menu');
    }
    public function main()
    {

        return view('Admin.main');
    }

}
