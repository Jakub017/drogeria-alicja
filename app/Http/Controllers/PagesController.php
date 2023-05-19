<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\PremiumProduct;

class PagesController extends Controller
{
    public function home() {
        $products = Product::orderby('created_at', 'desc')->get();
        $premium_products = PremiumProduct::orderby('created_at', 'desc')->get();
        $brands = Brand::get();
        return view('home', compact('products', 'premium_products', 'brands'));
    }

    public function product(Product $product) {
        return view('product', compact('product'));
    }

    public function premium_product(PremiumProduct $premium_product) {
        return view('premium-product', compact('premium_product'));
    }


    public function calendar() {
        return view('calendar');
    }
}