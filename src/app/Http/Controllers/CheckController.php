<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;

class CheckController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    public function register() {
        return view('register');
    }

    public function store(ProductRequest $request) {
        if ($request->has('back')) {
            return redirect('/products')->withInput();
        }

        Product::create(
            $request->only([
                'name',
                'price',
                'image',
                'description'
            ])
        );
        return view('products');
    }

    public function search(Request $request) {
            if ($request->has('reset')) {
                return redirect('/products')->withInput();
            }
            $query = Product::query();
            $query = $this->getSearchQuery($request, $query);

            $products = $query->paginate(6);
            $csvData = $query->get();
            $seasons = Season::all();
            return view('products', compact(''));
        }
}
