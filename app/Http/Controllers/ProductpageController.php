<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductpageController extends Controller
{
    public function index($slug)
    {
        $product = Product::with('brand', 'category', 'size', 'photos')->where("MPN", $slug);
        return view('pages.productpage', [
            "product" => $product->get()
        ]);
    }

    public function buy($slug, $count)
    {
        if (!Auth::check()) {
            return redirect(route('user.profile'));
        }
        $product_id = Product::where('MPN', $slug)->first()->id;
        $user_id = Auth::id();
        $order = new Order;
        $order->count = $count;
        $order->product_id = $product_id;
        $order->users_id = $user_id;
        $order->save();
        return redirect(route('goods'));
    }
}
