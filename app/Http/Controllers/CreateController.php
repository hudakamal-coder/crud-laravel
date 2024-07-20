<?php

namespace App\Http\Controllers;
use App\Models\create;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CreateController extends Controller
{
  public function index(){
    $creates=create::all();
    return view('create',compact('creates'));
  }
  public function store(Request $request){
    $this->Validate($request,[
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'note'=>'required|string|max:225'
    ]);
    create::create([
        'name'=>$request->name,
        'price'=>$request->price,
        'note'=>$request->note,
    ]);
    return redirect()->back();
  }
  public function edit($id){
    $creates=create::findOrFail($id);
    return view('create-edit',compact('creates'));
  }
  public function update(Request $request,$id){
    $this->Validate($request,[
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'note'=>'required|string|max:225'
    ]);
     create::findOrFail($id)->update([
        'name'=>$request->name,
        'price'=>$request->price,
        'note'=>$request->note
     ]);
     return redirect()->back();
  }
  public function destroy($id){
create::findOrFail($id)->delete();
return redirect()->back();
  }
}
