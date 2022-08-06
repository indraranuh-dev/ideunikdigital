<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use Modules\Post\Services\Post\PostQuery;

class Populars extends Component
{
    public function render()
    {
        return view('livewire.post.populars', [
            'populars' => (new PostQuery())->getPopularPosts([], 5, 'this-year')
        ]);
    }
}