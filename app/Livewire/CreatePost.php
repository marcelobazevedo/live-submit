<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Posts;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreatePost extends Component
{
    public PostForm $form;

    public bool $success = false;
    public string $title = '';
    public bool $showHelp = false;

//    public function mount(string $title = null): void
//    {
//        $this->title = $title;
//    }

//    public function toggleHelp(): void
//    {
//        $this->showHelp = !$this->showHelp;
//    }

    public function save(): void
    {
        $this->validate();

        $this->form->save();

        $this->success = true;
    }

    public function updatedFormTitle($property): void
    {
//        if($property == 'form.title'){
//            $this->form->title = Str::headline($this->form->title);
//        }
        $this->form->title = Str::headline($this->form->title);
    }

    public function validateTitle(): void
    {
        $this->validateOnly('form.title');
    }

    #[Layout('layouts.app')]
    #[Title('Criando Posts')]
    public function render()
    {
        return view('livewire.create-post');
    }
}
