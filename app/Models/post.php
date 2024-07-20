<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function category(){
        return $this->belongsTo(category::class,'category_id');
    }
 
    public function tags(){
        return $this->belongsToMany(tag::class,'post_tag');
    }
}
