<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Tag;
use App\Media;
use App\HistoryProduct;
use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller{
    public function showAll(){
        $products = Product::where('status', 'published')
            ->with('category', 'media', 'tags')
            ->orderBy('publish_date', 'DESC')
            ->take(5)
            ->get();

        return view('home', compact('products'));
    }

    public function showSingle($n){
        $product = Product::where('id', $n)
            ->with('category', 'media', 'tags')->First();

        return view('single', compact('product'));
    }

    public function showCurrentBasket($n){
        $basket = HistoryProduct::where('id', $n)->with('user', 'products')->First();
        // $customer = User::where('id', $basket->user_id)->get();

        return view('basket', compact('basket'));
    }
}
