<?php

namespace App\Models;
use App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content'];
    public function comments() {

        return $this->hasMany('App\Models\Comment'); 
        
        }
   
}
