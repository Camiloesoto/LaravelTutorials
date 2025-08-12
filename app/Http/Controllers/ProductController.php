<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public static $products = [
        ["id"=>"1", "name"=>"TV", "description"=>"Best TV", "price"=>"100"],
        ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "price"=>"199"],
        ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "price"=>"30"],
        ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses", "price"=>"40"]
    ];

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = ProductController::$products;
        return view('product.index')->with("viewData", $viewData);
    }

    public function show(string $id) : View | RedirectResponse
    {
        $viewData = [];
        
        // Validate if the product ID exists
        if ($id < 1 || $id > count(ProductController::$products)) {
            return redirect()->route('home.index');
        }
        
        $product = ProductController::$products[$id-1];
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create product";

        return view('product.create')->with("viewData", $viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "description" => "required",
            "price" => "required|numeric|gt:0"
        ]);
        
        // Create new product
        $newProduct = [
            "id" => (string)(count(self::$products) + 1),
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            "price" => $request->input('price')
        ];
        
        // Add to products array
        self::$products[] = $newProduct;
        
        // If validation passes, redirect to success page
        return redirect()->route('product.success');
    }

    public function success(): View
    {
        $viewData = [];
        $viewData["title"] = "Product Created Successfully";
        $viewData["subtitle"] = "Product Created";
        
        return view('product.success')->with("viewData", $viewData);
    }
}
