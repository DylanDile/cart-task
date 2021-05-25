<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use App\Facades\Cart;

class Index extends Component
{
    public $products;

    public function render()
    {
        return view('livewire.products.index')->extends('layouts.app');
    }

    public function mount()
    {
        $this->getProducts();
    }

    public function getProducts()
    {
        $this->products = Product::query()->latest()->where('status', 1)->get();
    }

    public function addToCart(Product $product)
    {
        Cart::add($product);
        $this->emit('cartProductAdded');

    }
}
