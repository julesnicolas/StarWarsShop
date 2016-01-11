<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImagesRequest;

use App\Product;
use App\Category;
use App\Tag;
use App\Media;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::select()
            ->with('category', 'media', 'tags')
            ->orderBy('publish_date', 'DESC')
            ->take(100)
            ->get();


        return view('admin.dashboard', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();

        $cats = Category::all();
        $cates = array();

        foreach ($cats as $cat) {
            $cates[$cat->id] = $cat->title;
        }

        return view('admin.addproduct', compact('cates', $cates, 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->all();

        $product = Product::create($req);

        if (\Input::hasFile('image')) {

            $this->imgsave($request, $product);

        };

        if (!empty($request->input('tags'))) {
            foreach ($request->input('tags') as $id) {
                $product->tags()->attach($id);
            }
        };

        return redirect()->to('dashboard/product')->with('message', trans('creation success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('admin.deleteproduct', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $tags = Tag::all();

        $cats = Category::all();
        $cates = array();

        foreach ($cats as $cat) {
            $cates[$cat->id] = $cat->title;
        }

        return view('admin.editproduct', compact('product', 'cates', $cates, 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (\Input::hasFile('image')) {
            $this->imgsave($request, $product);
        }


        if (!empty($request->input('tags'))) {
            $product->tags()->sync($request->input('tags'));
        } else {
            $product->tags()->detach();
        }

        $product->update($request->all());

        return redirect()->to('dashboard/product')->with('message', 'update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('dashboard/product')->with('message', 'delete success');
    }

    public function imgsave($image)
    {

            $chemin = config('images.path');

            $extension = $image->getClientOriginalExtension();
            do {
                $nom = str_random(20) . '.' . $extension;
            } while (file_exists($chemin . '/' . $nom));

            $name = $chemin .'/'. $nom;

            $name->media->name->save();
            return  $image->move($chemin, $nom);




    }
}
