<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showHome(){
        return view('pages.home');
    }

    public function displayProducts(){
        return view('pages.products');
    }

    public function showTransactions(){
        return view('pages.transactions');
    }
}