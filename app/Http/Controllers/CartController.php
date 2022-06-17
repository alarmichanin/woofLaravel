<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user_id = Auth::id();
            $products = Product::whereHas('orders', function ($query) use ($user_id){
                $query->where('users_id',$user_id);
            })->with(['photos' => function (HasMany $query) {
                $query->where('isGeneral', 1);
            },'orders'])->get();

            return view('pages.cartpage', [
                'products' => $products,
            ]);
        } else {
            redirect(route('user.profile'));
        }
    }
}
