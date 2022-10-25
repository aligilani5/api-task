<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ApiController extends Controller
{
    //Queries categories with products having product price greater than 500 
    public function getAllCategoriesWithProductsPrice() {

        $categoriesWithProductsPrice = Category::whereHas('products', function($q){

            return $q->where('price', '>', 500);
        })->with('products', function($q){

            return $q->where('price', '>', 500);
        })->get();

        return $categoriesWithProductsPrice;
    }

    //Queries top 5 categories with products that are new listed
    public function getCategoriesWithNewListedProducts() {

        $newListedProducts = Category::with('products')->latest()->limit(5)->get();

        return $newListedProducts;
    }
}
