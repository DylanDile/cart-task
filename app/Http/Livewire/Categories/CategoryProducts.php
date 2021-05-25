<?php

namespace App\Http\Livewire\Categories;

use App\Facades\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class CategoryProducts extends Component
{
    public $category;
    public $products;

    public function mount($id)
    {
        $this->category = Category::query()->with('products')->find($id);
    }

    public function render()
    {
        return view('livewire.categories.category-products')->extends('layouts.app-client');
    }

    public function addToCart(Product $product)
    {
        Cart::add($product);
        $this->emit('cartProductAdded');

    }
}
