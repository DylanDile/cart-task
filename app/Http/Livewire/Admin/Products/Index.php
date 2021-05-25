<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $products;

    public function render()
    {
        return view('livewire.admin.products.index')->extends('layouts.app-client');
    }

    public function mount()
    {
        $this->getAllProducts();
    }

    public function getAllProducts()
    {
        $this->products = Product::query()->oldest()->get();
    }
}
