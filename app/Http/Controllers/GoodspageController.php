<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GoodspageController extends Controller
{
    public function index($category = null)
    {
        if ($category) {
            $category_id = explode("-", $category)[1];
            $products = Product::whereHas('category', function ($query) use ($category_id) {
                $query->where('id', $category_id);
            })->with(['brand', 'size', 'category', 'photos' => function (HasMany $query) {
                $query->where('isGeneral', 1);
            }]);
        } else {
            $products = Product::with(['brand', 'category', 'size', 'photos' => function (HasMany $query) {
                $query->where('isGeneral', 1);
            }]);
        }
        return view('pages.goodspage', [
            'categories' => Category::all(),
            'products' => $products->simplePaginate(8),
            'popular' => $products->where('popular', 1)->get(),
        ]);
    }
}
