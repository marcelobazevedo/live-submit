<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public Collection $categories;
    public string $searchQuery = '';
    public int $searchCategory = 0;

    public function mount(): void
    {
        $this->categories = Category::pluck('name', 'id');
    }

    public function updating($key): void
    {
        if ($key === 'searchQuery' || $key === 'searchCategory') {
            $this->resetPage();
        }
    }

    public function deleteProduct(int $productId): void
    {
        Product::where('id', $productId)->delete();
    }

    public function render()
    {
//        sleep(2);
//        $products = Product::with('category')
//            ->when($this->searchQuery !== '', fn(Builder $query) => $query->where('name', 'like', '%'. $this->searchQuery .'%'))
//            ->when($this->searchCategory > 0, fn(Builder $query) => $query->where('category_id', $this->searchCategory))
//            ->paginate(10);

        $products = Product::with('categories')
            ->when($this->searchQuery !== '', fn(Builder $query) => $query->where('name', 'like', '%'. $this->searchQuery .'%'))
            ->when($this->searchCategory > 0, fn(Builder $query) => $query->where('category_id', $this->searchCategory))
            ->when($this->searchCategory > 0, function (Builder $query) {
                $query->whereHas('categories', function (Builder $query2) {
                    $query2->where('id', $this->searchCategory);
                });
            })
            ->paginate(10);
//        dd($products);

        return view('livewire.products', [
            'products'=>$products,
        ]);
    }
}
