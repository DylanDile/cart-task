<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $slug;
    public $description;
    public $status;

    public function render()
    {
        return view('livewire.admin.categories.create')->extends('layouts.app-client');
    }

    public function updated($field)
    {
        $this->validateOnly($field,[
            'name' => 'required|min:4',
            'description' => 'required|min:4',
        ]);
    }

    public function AddCategory()
    {
        $data = $this->validate([
            'name' => 'required|min:4',
            'description' => 'required|min:4',
        ]);
        $data['slug'] = Str::slug($this->name);
        $data['status']= 1;

        if(Category::query()->create($data))
        {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'Success Message!',
                'text' => 'You have successfully created a new product category.'
            ]);

            session()->flash('success', 'You have successfully created a new product category');
            $this->reset();
        }
        else {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'error',
                'message' => 'Error Message!',
                'text' => 'Failed to create a new product category.'
            ]);
            session()->flash('error', 'Failed to create a new product category');
        }


    }
}
