<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public $categories;
    public function render()
    {
        return view('livewire.categories.index')->extends('layouts.app-client');
    }

    public function mount()
    {
        $this->getCategories();
    }

    public function getCategories()
    {
        $this->categories = Category::query()->oldest()->get();
    }

    public function ViewCategory(Category $category)
    {
        $this->emit('selectedCategory', $category->id);
        return redirect()->to('/category/'.$category->id);
    }
}
