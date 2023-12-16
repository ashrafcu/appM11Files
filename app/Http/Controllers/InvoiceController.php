<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function getInvoices(){
        $allTransactions= DB::table('invoices')->join('users','invoices.client_id','=','users.id')->get();
        //$allTransactions= DB::table('invoices')->select('id', 'clinet_id', 'total_price')->get();
        return $allTransactions;
        
    }

    public function getTotalAmount(){
        $totalTransactionAmount= DB::table('invoices')->sum('total_price');
        return $totalTransactionAmount;
        
    }
    public function showAllTransactions(){
        return view('pages.transactions');
        
    }
}
