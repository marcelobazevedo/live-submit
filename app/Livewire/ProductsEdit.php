<?php

namespace App\Livewire;

use App\Livewire\Forms\ProductsForm;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Collection;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ProductsEdit extends Component
{
    public ProductsForm $form;
//    #[Locked]
//    public int $productId;
//    #[Rule('required|min:3')]
//    public string $name = '';
//    #[Rule('required|min:3')]
//    public string $description = '';
//    #[Rule('required|exists:categories,id', as: 'category')]
//    public int $category_id;
    public Collection $categories;

    public function mount(Product $product): void
    {
        $this->form->setProduct($product);
//        $this->productId = $product->id;
//        $this->name = $product->name;
//        $this->description = $product->description;
//        $this->category_id = $product->category_id;
        $this->categories = Category::pluck('name', 'id');
    }
    public function save(): void
    {
        $this->form->update();
//        $this->validate();
//
//        Product::where('id', $this->productId)->update($this->only(['name', 'description', 'category_id']));

        $this->redirect('/products');
    }

    public function render()
    {
//        return view('livewire.products-edit');
        return view('livewire.products-create');
    }
}
