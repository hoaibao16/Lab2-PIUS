<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    private $category;
    private $products;

    public function __construct()
    {
        $this->category = new Category();
        $this->products = new Product();
    }

    public function showById($id,Request $request){      
        $view = $this->category->getById($id);
        $filters = [];
        
        if (!empty($request->txtPrice)){
            $price = $request->txtPrice;
            $filters[]=['products.price','=',$price];
        }

        $pro = $this->products->getByIdAndPrice($id,$filters);
        return view('category',compact('view','pro'));
    }


}