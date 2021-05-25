<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $category_id;
    public $name;
    public $slug;
    public $description;
    public $price;
    public $status;
    public $picture;

    public $product;
    public $categories;

    public function render()
    {
        return view('livewire.admin.products.create')->extends('layouts.app');
    }

    public function mount()
    {
        $this->getCategories();
    }

    public function getCategories()
    {
        $this->categories = Category::query()->oldest()->get();
    }

    public function updated($field)
    {
        $this->validateOnly($field,[
            'category_id' => 'required',
            'name' => 'required|min:4',
            'description' => 'required|min:4',
            'price' => 'required|min:1',
            'picture' => 'required|mimes:jpeg,jpg,png,bmp'
        ]);
    }

    public function AddProduct()
    {
        $data = $this->validate([
            'category_id' => 'required',
            'name' => 'required|min:4',
            'description' => 'required|min:4',
            'price' => 'required|min:1',
            'picture' => 'required|mimes:jpeg,jpg,png,bmp'
        ]);

        $data['slug'] = Str::slug($this->name);
        $data['status']= 1;

        $data['picture'] = $this->picture->store('products', 'public');

        Log::info($data["picture"]);

        if(Product::query()->create($data))
        {
            /*$this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'Success Message!',
                'text' => 'You have successfully created a new Product.'
            ]);*/

            session()->flash('success', 'You have successfully created a new Product');
            $this->reset();
            $this->getCategories();
        }
        else {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'error',
                'message' => 'Error Message!',
                'text' => 'Failed to create a new product.'
            ]);
            session()->flash('error', 'Failed to create a new product');
        }


    }


}
