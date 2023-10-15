<?php

namespace App\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;

class TodosList extends Component
{
    public Collection $todos;

    public function render()
    {
        return view('livewire.todos-list');
    }
}
