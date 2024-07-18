<?php

namespace App\Livewire;

use Livewire\Component;

class SearchArticle extends Component
{
    public $search;
    public function render()
    {
        return view('livewire.search-article',[
            "articles" => \App\Models\Article::search($this->search)
            
        ]);
    }
}
