<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $table = 'items';

    public function category()
    {
        return $this->hasOne(Categories::class);
    }
    public $fillable = [
      'name',
      'stats',
      'image',
      'desc',
        'type'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
