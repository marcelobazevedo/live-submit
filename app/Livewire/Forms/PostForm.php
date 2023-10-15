<?php

namespace App\Livewire\Forms;

use App\Models\Posts;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    public ?Posts $posts;

    #[Rule('required|min:5')]
    public string $title = '';

    #[Rule('required|min:5')]
    public string $body = '';

    public function setPosts(Posts $posts): void
    {
        $this->posts = $posts;
        $this->title = $posts->title;
        $this->body = $posts->body;
    }

    public function save(): void
    {
        Posts::create($this->all());

        $this->reset('title', 'body');
    }

    public function update(): void
    {
        $this->posts->update($this->all());
    }
}
