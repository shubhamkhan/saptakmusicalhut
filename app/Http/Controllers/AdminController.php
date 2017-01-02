<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index()
  {
    return view('welcome');
  }

  public function dashboard()
  {
    return view('hi');
  }

  public function home()
  {
    return view('home');
  }
}
