<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FoodItem;

class MenuController extends Controller
{
    public function index()
    {
        $categories = Category::with([
            'foodItems' => function ($query) {
                $query->where('is_visible', true)
                    ->orderBy('name');
            }
        ])->orderBy('name')->get();

        $specials = FoodItem::with('category')
            ->where('is_visible', true)
            ->where('is_special', true)
            ->latest()
            ->get();

        return view('menu', compact('categories', 'specials'));
    }
}