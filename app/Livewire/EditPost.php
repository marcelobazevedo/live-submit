<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Posts;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class EditPost extends Component
{
    public PostForm $form;
    public bool $success = false;
    public function mount(Posts $posts)
    {
        $this->form->setPosts($posts);
    }

    public function update():void
    {
        $this->validate();
        $this->form->update();
    }
    #[Layout('layouts.app')]
    public function render(): View
    {
        return view('livewire.edit-post');
//        return view('posts.edit');
    }
}
