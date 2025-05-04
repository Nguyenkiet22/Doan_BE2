<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //hiện thị sản phẩm
    public function index(){
        return view("desgin.admin");
    }

    /**
     * 000000000000
     * List of products
     */
    public function listProducts()
    {
        if(Auth::check()){
            $products = Product::all();
            return view('desgin.index', ['products' => $products]);
        }

        return redirect("index")->withSuccess('You are not allowed to access');
    }
}
