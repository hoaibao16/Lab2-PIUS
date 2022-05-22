<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function showAll(){      
        $view = $this->product->getAll();        
        return view('product',['view'=>$view]);
    }
    

}