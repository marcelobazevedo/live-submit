<?php

namespace App\Livewire;

use App\Models\Posts;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ShowComments extends Component
{
    public Posts $posts;

    public function mount(Posts $posts): void
    {
        $this->posts = $posts;
    }

    #[Computed]
    public function comments(): Collection
    {
//        return $this->posts->comments->get();
        return $this->posts->get();
    }

    public function render()
    {
        return view('livewire.show-comments');
    }
}
