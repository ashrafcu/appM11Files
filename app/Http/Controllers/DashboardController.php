<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/*
Create a basic Laravel project for a storekeeper by utilising routes, controllers, migration, and query builder. Every time a new product is introduced, it must be entered using a form that includes the amount. Update the product quantity data if a new item is sold. The store owner can work with a syndicate consultant to change the product price. Create a dashboard and display four cards with the sales figures for today, yesterday, this month, and last month. Furthermore, create a table on a new page to display the sale transaction history.

*/

class DashboardController extends Controller
{
    public function showHome(){
        return view('pages.home');
    }

    public function showAllTransactions(){
        return view('pages.transactions');
        
    }

    
}