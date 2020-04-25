<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $table = 'items';

    public function category()
    {
        return $this->belongsTo(Categories::class,'type_items','id');
    }
    public $fillable = [
      'name',
      'stats',
      'image',
      'desc',
        'type_items',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
