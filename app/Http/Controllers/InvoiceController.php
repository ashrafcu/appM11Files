<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function addInvoices(){
        return view('pages.add-invoices');
    }
    public function getInvoices(){
        $allTransactions= DB::table('invoices')->join('users','invoices.client_id','=','users.id')->get();
        return $allTransactions;
        
    }

    public function getTotalAmount(){
        $totalTransactionAmount= DB::table('invoices')->sum('total_price');
        return $totalTransactionAmount;
        
    }
    
}
