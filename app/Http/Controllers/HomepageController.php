<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class HomepageController extends Controller
{
    //
    public function index()
        {
            $categories = Categories::all();

            return view('web.homepage',[
            'categories' => $categories,
            ]);
        }
      
    public function products()
    {
        return view('web.products');
    }
    public function product($slug){
        return view('web.product', ['slug' => $slug]);
    }

    public function categories()
    {
        return view('web.categories');
    }

    public function category($slug)
    {
        $category = Categories::find('slug', $slug);
        $title = "categories";
        return view('web.single_category', ['slug' => $slug, 'title' => $title, 'category' => $category]);
    }

    public function cart()
    {
        return view('web.cart');
    }

    public function checkout()
    {
        return view('web.checkout');
    }
}
