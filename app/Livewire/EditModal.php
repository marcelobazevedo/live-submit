<?php

namespace App\Livewire;

use App\Models\Produtos;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Locked;
use Livewire\Component;

class EditModal extends Component
{
    #[Locked]
    public int $id;
    public string $name = '';
    public string $price = '';
    public bool $showModal = false;

    public function edit($productId): void
    {
        $product = Produtos::find($productId);
        $this->id = $product->id;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->showModal = true;
    }

    public function render(): View
    {
        return view('livewire.edit-modal',[
            'products'=>Produtos::all(),
        ]);
    }
}
