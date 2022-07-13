<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        // $all_images = Image::all();
        // $length = count($all_images);
        // return view('cart', [
        //     'all_images' => $all_images,
        //     'length'=>$length,
        // ]);
        $products = Cart::all();
        return view('cart', [
            'products'=>$products,
        ]);
    }
    public function deleteProduct($product_id)
    {
        DB::delete("delete from carts where id = {$product_id}");
        return redirect()->back()->with('message', 'Remove successfully!');
    }
}
