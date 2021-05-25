<?php

namespace App\Http\Livewire\Carts;

use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Hamcrest\Core\DescribedAsTest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Facades\Cart as CartFacade;

class MyCart extends Component
{
    public $cart;
    public $selected;
    public $is_selected = 0;
    public $subject_price = 0;
    public $cartTotal = 0;
    public $totalQuantity = 0;

    public function render()
    {
        return view('livewire.carts.my-cart')->extends('layouts.app');
    }

    public function mount(): void
    {
        $this->cart = CartFacade::get();
        $this->CalProductTotal();
        $this->CalTotalQuantity();
    }

    public function removeFromCart($productID): void
    {
        CartFacade::remove($productID);
        $this->cart = CartFacade::get();
        $this->emit('productRemoved');
    }

    public function checkout()
    {
        $listed = CartFacade::get();
        $order_no = date('His').\auth()->user()->id.date('y'). $this->totalQuantity.date('md');
        Log::info($order_no);
        session()->flash('success', 'You order has been stored. Please fill in the Payment Details to confirm Funds Transfer');

        foreach ($listed['products'] as $product)
        {
            Order::query()->create([
                'order_no' => $order_no,
                'name'=> $product->name,
                'price' => ($product->price * $product->quantity),
                'quantity' => $product->quantity,
                'user_id' => \auth()->user()->id,
                'order_date' => Carbon::now(),
            ]);
        }

        CartFacade::clear();
        $this->emit('clearCart');
        $this->cart = CartFacade::get();
        session()->flash('success', 'You order has been stored. Please fill in the Payment Details to confirm Funds Transfer');
        return $this->redirect('/checkout/'.Str::slug($order_no));

    }

    public function CalProductTotal()
    {
        $products = CartFacade::get();
        $total  = 0;
        foreach ($products['products'] as $product)
        {
            $total += ( $product->price * $product->quantity);
        }
        $this->cartTotal = $total;
    }

    public function CalTotalQuantity()
    {
        $products = CartFacade::get();
        $total  = 0;
        foreach ($products['products'] as $product)
        {
            $total += $product->quantity;
        }
        $this->totalQuantity = $total;
    }

    public function ClearCart()
    {
        CartFacade::clear();
        $this->cart = CartFacade::get();
        session()->flash('success', 'You have successfully cleared the Cart.');
    }

    public function AddQuantity(Product $product)
    {
        CartFacade::qty_plus($product);
        $this->cart = CartFacade::get();
        $this->CalProductTotal();
        $this->CalTotalQuantity();
    }
    public function ReduceQuantity(Product $product)
    {
       CartFacade::qty_minus($product);
       $this->cart = CartFacade::get();
       $this->CalProductTotal();
       $this->CalTotalQuantity();
    }

}
