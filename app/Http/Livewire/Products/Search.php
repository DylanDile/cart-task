<?php

namespace App\Http\Livewire\Products;

use App\Facades\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Search extends Component
{
    public $products;
    public $search;

    public function render()
    {
        return view('livewire.products.search')->extends('layouts.app');
    }

    public function mount()
    {
        $this->getAllProducts();

    }

    public function getAllProducts()
    {
        $this->products = Product::query()->get();
    }

    public function updated($field)
    {
        if($this->search == "")
        {
            $this->getAllProducts();
        }else{

            $this->products = DB::table('products')->where('name' , 'LIKE', '%'.$this->search.'%')->get();
        }
    }

    public function addToCart(Product $product)
    {
        Cart::add($product);
        $this->emit('cartProductAdded');
        $this->getAllProducts();

    }
}
