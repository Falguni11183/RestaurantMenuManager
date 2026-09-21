<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use App\Models\Category;
use Illuminate\Http\Request;

class FoodItemController extends Controller
{
    public function index()
    {
        $foodItems = FoodItem::with('category')
            ->latest()
            ->get();

        return view('food_items.index', compact('foodItems'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('food_items.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|string|max:255',
            'is_special' => 'nullable|boolean',
            'is_visible' => 'nullable|boolean',
        ]);

        FoodItem::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,
            'is_special' => $request->has('is_special'),
            'is_visible' => $request->has('is_visible'),
        ]);

        return redirect()
            ->route('food-items.index')
            ->with('success', 'Food item added successfully.');
    }

    public function show(FoodItem $foodItem)
    {
        $foodItem->load('category');

        return view('food_items.show', compact('foodItem'));
    }

    public function edit(FoodItem $foodItem)
    {
        $categories = Category::orderBy('name')->get();

        return view('food_items.edit', compact('foodItem', 'categories'));
    }

    public function update(Request $request, FoodItem $foodItem)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|string|max:255',
            'is_special' => 'nullable|boolean',
            'is_visible' => 'nullable|boolean',
        ]);

        $foodItem->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,
            'is_special' => $request->has('is_special'),
            'is_visible' => $request->has('is_visible'),
        ]);

        return redirect()
            ->route('food-items.index')
            ->with('success', 'Food item updated successfully.');
    }

    public function destroy(FoodItem $foodItem)
    {
        $foodItem->delete();

        return redirect()
            ->route('food-items.index')
            ->with('success', 'Food item deleted successfully.');
    }
}