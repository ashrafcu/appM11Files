<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showHome(){
        return view('pages.home');
    }

    public function showTaskList(){
        return view('pages.alltasks');
    }
}