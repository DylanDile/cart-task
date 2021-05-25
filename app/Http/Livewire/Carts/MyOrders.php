<?php

namespace App\Http\Livewire\Carts;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyOrders extends Component
{
    public $orders;

    public function render()
    {
        return view('livewire.carts.my-orders')->extends('layouts.app');
    }

    public function mount()
    {
        $this->getMyOrders();
    }

    public function getMyOrders()
    {
        $this->orders = Order::query()->where('user_id', Auth::user()->id)->get();
    }
}
