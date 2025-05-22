<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'price_min' => 'nullable|numeric|min:0|required_with:price_min',
            'price_max' => 'nullable|numeric|min:0|required_with:price_max',
            'sort_by' => 'nullable|in:name,price',
            'sort_order' => 'nullable|in:asc,desc',
            'search' => 'nullable|string|max:255',
        ]);

        $query = Product::query();

        // Search by name
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Filter: Price Range
        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }

        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        // Sort: name or price
        if ($request->has('sort_by') && in_array($request->sort_by, ['name', 'price'])) {
            $sortOrder = $request->get('sort_order', 'asc');
            $query->orderBy($request->sort_by, $sortOrder);
        }

        return response()->json($query->get());
    }

    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return response()->json($product);
    }
}
