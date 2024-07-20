<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductOrmController extends Controller
{
    public function index(){
       return  product::all();
       }
       public function store(){
         return product::create([
         'name' => 'laptob',
          'price' => 5000,
          'note' => 'text'
         ]);
       }

       public function delete(){
        return product::findOrFail(1)->delete();
      }
      public function update(){
        return product::findOrfail(2)->update([
            'name'=>'laptob2',
             'price'=>2000,
             'note'=>'text2'
        ]);
      }
    }

