<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $table = 'category';

    public function item()
    {
        return $this->hasOne(Item::class);
    }
    public $fillable = [
      'name',
      'class'
    ];
}
