<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;

class DashboardController extends Controller
{
    public function index() {
        $productsCount = Product::all()->count();
        $categoriesCount = Category::all()->count();
        $subCategoriesCount = SubCategory::all()->count();

        $products = Product::all();
        $categories = Category::all();
        $subCategories = SubCategory::all();

        return view('dashboard', compact('productsCount', 'categoriesCount', 'subCategoriesCount', 'products','categories', 'subCategories'));
    }
}
