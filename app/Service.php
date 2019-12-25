<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name', 'email', 'contact', 'address', 'city', 'category', 'description', 'image'
    ];

    public function categories(){
        return $this->belongsToMany('App\Category');
    }
}
