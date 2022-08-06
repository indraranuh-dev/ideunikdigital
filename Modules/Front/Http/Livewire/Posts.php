<?php

namespace Modules\Front\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Master\Entities\Category;
use Modules\Master\Services\Category\CategoryQuery;
use Modules\Post\Services\Post\PostQuery;

class Posts extends Component
{
    use WithPagination;

    public $search, $category, $tag;

    protected $queryString = [
        'search', 'category', 'tag',
    ];

    public function getAll()
    {
        return (new PostQuery())->publicPosts((object) [
            'category' => $this->category,
            'tag' => $this->tag,
            'sort' => 'published_at',
            'order' => 'desc',
            'search' => $this->search,
        ], 5);
    }

    public function allCategories()
    {
        return (new CategoryQuery())->getByTableReference('posts.berita');
    }

    public function updated($component, $value)
    {
        if (!$value) {
            $this->reset($component);
        }
        $this->resetPage();
    }

    public function render()
    {
        return view('front::livewire.posts', [
            'posts' => $this->getAll(),
            'categories' => $this->allCategories(),
        ]);
    }
}