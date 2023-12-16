<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProducts(){
        $allProducts= DB::table('products')->get();
        return $allProducts;
        
    }
    public function showAllProducts(){
        return view('pages.products');
        
    }
}