<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $table = 'products';
    use HasFactory;

    public function category(): HasOne
    {
        return $this->belongsTo(Category::class);
    }

    public function getAll()
    {
        $products = DB::table($this->table);
        $products = $products->get();
        return $products;
    }

    public function getByIdAndPrice($id,$filters)
    {
        $products = DB::table($this->table)->where('category_id','=',$id);

        if (!empty($filters)){		
			$products = $products->where($filters);			
		}

        $products = $products->get();
        return $products;
    }

    public function getProByProId($productId)
    {
        $products = DB::table($this->table)->where('id','=',$productId)->get();
        return $products;
    }
}
