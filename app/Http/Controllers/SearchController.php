<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input("searcher");
        $products = Product::where("name", 'LIKE', "%$search%")->with(['brand', 'size', 'category', 'photos' => function (HasMany $query) {
            $query->where('isGeneral', 1);
        }]);
        return view('pages.goodspage', [
            'categories' => Category::all(),
            'products' => $products->simplePaginate(8),
            'popular' => $products->where('popular', 1)->get(),
        ]);
    }
}
