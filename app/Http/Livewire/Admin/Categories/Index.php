<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public $categories;

    public function render()
    {
        return view('livewire.admin.categories.index')->extends('layouts.app-client');
    }

    public function mount()
    {
        $this->getAllCategories();
    }

    public function getAllCategories()
    {
        $this->categories = Category::query()->oldest()->get();
    }
}
