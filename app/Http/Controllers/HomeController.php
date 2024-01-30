<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $women_products = Product::where('sex', 'Women')->get();
        $men_products = Product::where('sex', 'Men')->get();
        $unisex_products = Product::where('sex', 'Unisex')->get();
    
        return view('welcome', compact('categories', 'women_products', 'men_products', 'unisex_products'));
    }
}
