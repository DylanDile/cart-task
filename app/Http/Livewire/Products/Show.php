<?php

namespace App\Http\Livewire\Products;

use App\Facades\Cart;
use App\Models\Product;
use Livewire\Component;

class Show extends Component
{
    public Product $product;

    public function render()
    {
        return view('livewire.products.show')->extends('layouts.app');
    }

    public function mount($id)
    {
        $this->product = Product::query()->find($id);
    }

    public function addToCart(Product $product)
    {
        Cart::add($product);
        $this->emit('cartProductAdded');

    }
}
