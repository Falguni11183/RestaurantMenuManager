<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FoodItem;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCategories = Category::count();

        $totalFoodItems = FoodItem::count();

        $todaySpecials = FoodItem::where('is_special', true)->count();

        $visibleItems = FoodItem::where('is_visible', true)->count();

        $hiddenItems = FoodItem::where('is_visible', false)->count();

        $recentFoodItems = FoodItem::with('category')
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'totalCategories',
            'totalFoodItems',
            'todaySpecials',
            'visibleItems',
            'hiddenItems',
            'recentFoodItems'
        ));
    }
}