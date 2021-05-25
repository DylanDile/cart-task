<?php

namespace App\Http\Livewire\Carts;

use Livewire\Component;
use App\Facades\Cart;
use Illuminate\View\View;

class CartHeader extends Component
{
    public $cartTotal = 0;

    protected $listeners = [
        'cartProductAdded' => 'updateCartTotal',
        'productRemoved' => 'updateCartTotal',
        'clearCart' => 'updateCartTotal'
    ];

    public function render():View
    {
        return view('livewire.carts.cart-header');
    }

    public function mount(): void
    {
        $this->cartTotal = count(Cart::get()['products']);
    }

    public function updateCartTotal(): void
    {
        $this->cartTotal = count(Cart::get()['products']);
    }
}
