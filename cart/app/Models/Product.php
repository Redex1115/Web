<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name','description','price','image','quantity','category'];
    public function price(){
        return $this->belongsTo('App\Models\
        Category');
    }
}
