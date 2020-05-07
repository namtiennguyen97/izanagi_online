<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    public $fillable = [
      'hint',
      'title',
      'image',
        'categories_id'
    ];
}
