<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
     return DB::select('select * from products');
    }
    public function insert(){
    return DB::insert('insert into products(name,price,note)values(?,?,?)',['laptob',5000,'not about laptob']);
       }
       public function delete(){
        return DB::delete('delete from products where id=?',[2]);
           }
}
