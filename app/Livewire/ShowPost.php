<?php

namespace App\Livewire;

use App\Models\Posts;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowPost extends Component
{
    public Posts $posts;
    public int $commentsCount = 0;

    public function mount(Posts $posts): void
    {
        $this->posts = $posts;
        $this->posts->loadCount('comments');
    }


//    #[Url(as:'q', history: true)]
//    public string $search = '';
//
//    public function render(): View
//    {
//        return view('livewire.show-post',[
//            'posts'=>Posts::where('title', 'LIKE', '%'.$this->search.'%')->get(),
//        ]);
//    }
}
