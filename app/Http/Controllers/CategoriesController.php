<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{


	public function create()
	{
		$categories = Category::firstOrCreate([
			'category_name' => 'sdghj',
			'parent'        => 1
		]);
		return true;
	} 

	public function index()
    {
    	$сategories = Category::where(['parent' => 0])->with('childrens')->get();
        return view('category', compact('сategories'));
    }

}
