<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    protected $fillable = [
    	'category_name',
    	'parent'
    ];

    public function childrens()
    {
    	return $this->hasMany('App\Models\Category', 'parent', 'id')->with('childrens');
    }
}
