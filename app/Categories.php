<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $table = 'category';


    public $fillable = [
        'type',
      'class',
        'desc'
    ];

    public function items(){
        return $this->hasMany(Item::class);
    }
}
