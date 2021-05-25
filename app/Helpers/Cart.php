<?php

namespace App\Helpers;

use App\Models\Product;
use Illuminate\Support\Facades\Log;

class Cart
{
    public function __construct()
    {
        if($this->get() === null)
            $this->set($this->empty());
    }

    public function add(Product $product): void
    {
        $cart = $this->get();
        $exist = array_search($product->id, array_column($cart['products'], 'id'));
        Log::info($exist);
        /*array_push($cart['products'], $product);
        $this->set($cart);*/
        foreach ($cart['products'] as $key)
        {
            # code...
            Log::info("Key ID to remove ".$key['id']);
            if($key['id'] == $product->id)
            {
                Log::info('Matches');
                $key['quantity']  += 1;
                //array_splice($cart['products'], array_search($product->id, array_column($cart['products'], 'id')), 1);
                Log::info($key);
                return;
            }

        }
        $product['quantity'] = 1;
        Log::info($product);
        array_push($cart['products'], $product);
        $this->set($cart);
    }

    public function remove(int $productId): void
    {
        $cart = $this->get();
        Log::info($productId);
        array_splice($cart['products'], array_search($productId, array_column($cart['products'], 'id')), 1);
        $this->set($cart);
    }

    public function clear(): void
    {
        $this->set($this->empty());
    }

    public function empty(): array
    {
        return [
            'products' => [],
        ];
    }

    public function get(): ?array
    {
        return request()->session()->get('cart');
    }

    private function set($cart): void
    {
        request()->session()->put('cart', $cart);
    }

    public function qty_minus(Product $product):void
    {
        $cart = $this->get();
        $exist = array_search($product->id, array_column($cart['products'], 'id'));
        Log::info($exist);

        foreach ($cart['products'] as $key)
        {
            # code...
            Log::info("Key ID to remove ".$key['id']);
            if($key['id'] == $product->id)
            {
                Log::info('Matches');
                $key['quantity']  -= 1;
                if($key['quantity'] == 0) {
                    array_splice($cart['products'], array_search($product->id, array_column($cart['products'], 'id')), 1);
                }
            }

        }
        $this->set($cart);
    }

    public function qty_plus(Product $product):void
    {
        $cart = $this->get();
        $exist = array_search($product->id, array_column($cart['products'], 'id'));
        Log::info($exist);

        foreach ($cart['products'] as $key)
        {
            # code...
            Log::info("Key ID to remove ".$key['id']);
            if($key['id'] == $product->id)
            {
                Log::info('Matches');
                $key['quantity']  += 1;
            }

        }
        $this->set($cart);
    }

}
