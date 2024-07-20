<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CrudController extends Controller
{
     public function index(){
        $products=product::all();       
        return view('crud',compact('products'));
     } 
     public function store(Request $request){
        $this->Validate($request,[
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'note'=>'required|string|max:225'
        ]);
       product::create([
        'name'=>$request->name,
        'price'=>$request->price,
        'note'=>$request->note
       ]);
       return redirect()->back();
     }
     public function edit($id){
        $products=product::findOrFail($id);
        return view('crud-edit',compact('products')); 
     }
     public function update(Request $request,$id){
        $this->Validate($request,[
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'note'=>'required|string|max:225'
        ]);
        product::findOrFail($id)->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'note'=>$request->note
        ]);
        return redirect()->back();
     }
     public function destroy($id){
        product::findOrFail($id)->delete();
        return redirect()->back();
     }
}
