<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Show the application product.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('product.index');
    }

    public function productdetail()
    {
        return view('product.productdetail');
    }

    public function productcart()
    {
        return view('product.productcart');
    }
}
