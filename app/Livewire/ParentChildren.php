<?php

namespace App\Livewire;

use App\Models\Produtos;
use Illuminate\Support\Collection;
use Livewire\Component;

class ParentChildren extends Component
{
    public string $customer_name = '';
    public string $customer_email = '';

    public array $orderProducts = [];
    public Collection $allProducts;

    public function mount(): void
    {
        $this->allProducts = Produtos::all();
        $this->orderProducts[] = ['produtos_id'=>'', 'quantity'=>1];
    }

    public function removeProduct($index): void
    {
        unset($this->orderProducts[$index]);
        $this->orderProducts = array_values($this->orderProducts);
    }

    public function addProduct(): void
    {
        $this->orderProducts[] = ['produtos_id'=>'', 'quantity'=>1];
    }
    public function render()
    {
        return view('livewire.parent-children');
    }
}
