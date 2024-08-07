<?php

namespace App\Http\Controllers\FrontPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public  function index()
    {
        return view('frontpanel.homepage.index');
    }
}
