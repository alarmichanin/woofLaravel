<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GoodspageController extends Controller
{
    public function index()
    {
        $products = Product::with(['brand', 'category', 'size', 'photos' => function (HasMany $query) {
            $query->where('isGeneral', 1);
        }]);
        return view('pages.goodspage', [
            'categories' => Category::all(),
            'products' => $products->simplePaginate(1),//24
            'popular' => $products->where('popular', 1)->get(),
        ]);
    }
}
