<?php

namespace App\Models;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{   
    use HasFactory;
    protected $fillable = [

       
      'content','blog_id','user_id'
      
         ];
         public function blog() {return $this->belongsTo('App\Models\Blog'); }     
         public function userName() {

            return User::find($this->user_id)->name; 
            
            } 
}
