<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imageController extends Controller
{
    public function uploadImage(){
        return view('pages.imgupload');
    }
    public function uploadSingleImage(Request $request){
        //dd($request->all());
        //dd($request->image->getClientOriginalExtension());
        //dd($request->image->getSize());
        $this->validate($request, [
            'image'=>'required|image|mimes:jpeg,png,jpg|max:4096',
        ]);
        //dd($request->file('image'));
        if($request->hasFile('image')){
            $image=$request->file('image');
            $fileNameToStore='photo-' . md5(uniqid()).'-'.time().'.'.$image->getClientOriginalExtension();
            //dd($fileNameToStore);
            $image->move(public_path('assets/images/imgs'),$fileNameToStore);
        } 
        return redirect()->back();
        
    }
}
