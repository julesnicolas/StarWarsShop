<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Tag;
use App\Media;
use App\Basket;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller{
    public function showAll(){
        $products = Product::where('status', 'published')
            ->with('category', 'media', 'tags')
            ->orderBy('publish_date', 'DESC')
            ->take(100)
            ->get();

        return view('home', compact('products'));
    }

    public function showSingle($n){
        $product = Product::where('id', $n)
            ->with('category', 'media', 'tags')->First();

        return view('single', compact('product'));
    }

    public function showCurrentBasket(){
        $basket = History::where('id', 1)->with('customer', 'product')->First();
        $customer = User::where('id', $basket->id_user)->get();

        return view('basket', compact('basket', 'customer'));
    }

    public function showcategoryAll($id){
            $products = Product::select(category_id)->where('status', 'published')
                ->with('category', 'media', 'tags')
                ->orderBy('publish_date', 'DESC')
                ->take(100)
                ->get();

            return view('category/'.$id, compact('products'));
        }
}
