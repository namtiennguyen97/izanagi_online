<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 */
class BodyPageAdmin extends Model
{
    public $table = 'bodyPage';
    public $fillable =[
            'hint',
        'title',
        'image',
        'categories_id'
    ];

    public function blogCategories(){
        return $this->belongsTo(BlogCategories::class,'categories_id','id');
    }
}
