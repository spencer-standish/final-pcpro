<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function cpu()
    {
        $cpus = Product::whereHas('category', function ($query) {
            $query->where('category_name', 'CPU');
        })->get();

        return view('products.cpu', compact('cpus'));
    }
    public function motherboards()
    {
        $motherboards = Product::whereHas('category', function ($query) {
            $query->where('category_name', 'Motherboard');
        })->get();

        return view('products.motherboard', compact('motherboards'));
    }
    public function memory()
    {
        $memory = Product::whereHas('category', function ($query) {
            $query->where('category_name', 'Memory');
        })->get();

        return view('products.memory', compact('memory'));
    }
    public function storage()
    {
        $storage = Product::whereHas('category', function ($query) {
            $query->where('category_name', 'Storage');
        })->get();

        return view('products.storage', compact('storage'));
    }
    public function videocard()
    {
        $videocard = Product::whereHas('category', function ($query) {
            $query->where('category_name', 'Video Card');
        })->get();

        return view('products.video_card', compact('videocard'));
    }
    public function case()
    {
        $case = Product::whereHas('category', function ($query) {
            $query->where('category_name', 'Case');
        })->get();

        return view('products.case', compact('case'));
    }
}
