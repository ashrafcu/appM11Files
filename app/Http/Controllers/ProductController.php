<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    public function addProducts(){
        return view('pages.add-products');
    }
    
    public function storeProducts(Request $request){
        
        $this->validate($request,[
            'productTitle'=>'required|string|max:255',
            'productQuantity'=>'required|int',
            'productPrice'=>'required',
        ]);   

        //Save Product Data to Database
        DB::table('products')->insert([
            'product_title'=>$request->productTitle,
            'quantity'=>$request->productQuantity,
            'price'=>$request->productPrice,
        ]);
        //return redirect()->back()->with('sucess','The product information has been stored successfully'); 
        return redirect()->route('product.list');  
        
    }
    
    public function getProducts(){
        $allProducts= DB::table('products')->select('id', 'product_title', 'quantity')->get();
        return $allProducts; 
    }
    
}
