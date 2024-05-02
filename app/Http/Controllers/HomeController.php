<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
{
$pageTitle = 'HomePage';
return view('home', ['pageTitle' => $pageTitle]);
}
}
