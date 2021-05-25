<?php

namespace App\Http\Livewire\Carts;

use App\Models\Order;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Checkout extends Component
{
    public $order_no;
    public $products;
    public $totals = 0;

    public function mount($id)
    {
        $this->order_no = $id;
        $this->getOrderProducts($id);
    }

    public function render()
    {
        return view('livewire.carts.checkout')->extends('layouts.app-client');
    }

    public function getOrderProducts($order_no)
    {
        $products = Order::query()->where('order_no', $order_no)->oldest()->get();
        $this->totals = $products->pipe(function ($collection) {
            return collect([
                'qty' => $collection->sum('quantity'),
                'price' => $collection->sum('price'),
            ]);
        });
        $this->products = $products;
    }



}
