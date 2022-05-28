<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class GoodspageController extends Controller
{
    public function index()
    {
        return view('pages.goodspage', ['categories' => Category::all(),
            'brands' => Brand::all(),
            'photos' => Photo::all()->where('isGeneral', true),
            'sizes' => Size::all(),
            'products' => Product::all()]);
    }
}
