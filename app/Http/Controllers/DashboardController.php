<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
  public function index()
  {
    session()->put('success', 'yo yo ');
    session()->put('error', 'oops');

    return view('dashboard.index');
   }
}
