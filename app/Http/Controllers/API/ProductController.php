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
            'price_min' => 'nullable|numeric|min:0',
            'price_max' => 'nullable|numeric|min:0',
            'sort_by' => 'nullable|in:name,price',
            'sort_order' => 'nullable|in:asc,desc',
        ]);

        $query = Product::query();

        // Filter: Price Range
        if ($request->has('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }

        if ($request->has('price_max')) {
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
