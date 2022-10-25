<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ApiController extends Controller
{
    //
    public function getAllCategoriesWithProductsPrice() {
        $categoriesWithProductsPrice = Category::whereHas('products', function($q){
            return $q->where('price', '>', 500);
        })->get();
        
        return $categoriesWithProductsPrice;
    }
}
