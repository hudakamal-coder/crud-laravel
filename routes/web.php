<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ProductOrmController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicResourceController;
use App\Http\Controllers\ItemController;
use App\Models\category;
use App\Models\post;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class,'index'])->name('home');

Route::get('/store',function(){
    category::find(1)->posts()->create([
        'title'=>'post 1',
        'description'=>'description 1'
    ]);
    post::create([
        'title'=>'post 1',
        'description'=>'description 1',
        'category_id'=>1,
    ]);
});

Route::get('/data-category',function(){
    return  view('home',['data'=>category::with('posts')->get()]);
});

Route::get('/data-post',function(){
    //return post::with('category')->get();
    return  view('home',['data'=>post::with('category')->get()]);
});


Route::get('/data',function(){
    //return post::with('category')->get();
    return  post::with('tags')->get();
});

Route::get('/store2',function(){
    post::find(5)->tags()->attach([1,2,3]);
});

Route::get('/login', [PublicController::class,'login'])->name('login');
 
Route::get('/index', [PublicController::class,'login'])->name('index');

Route::get('/may', [PublicController::class,'may'])->name('may');

Route::get('/item', [ItemController::class,'item'])->name('item');

Route::get('/product/index', [ProductController::class,'index']);

Route::get('/product/insert', [ProductController::class,'insert']);

Route::get('/product/delete', [ProductController::class,'delete']);

Route::get('/product/orm/index', [ProductOrmController::class,'index']);

Route::get('/product/orm/store', [ProductOrmController::class,'store']);

Route::get('/product/orm/delete', [ProductOrmController::class,'delete']);

Route::get('/product/orm/update', [ProductOrmController::class,'update']);

Route::resource('/public',PublicResourceController::class)->names('public');
 
Route::resource('/crud',CrudController::class)->names('crud');

Route::resource('/create',CreateController::class)->names('create');

Route::get('/play',function(){
    echo 1;
return view('play');
});
