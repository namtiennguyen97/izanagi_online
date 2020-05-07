<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    public $table="blogCategories";
    public $fillable = [
      'title',
        'type'
    ];

    public function bodyPage(){
        return $this->hasMany(BodyPageAdmin::class);
    }
}
