<?php

namespace Modules\Front\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Marketing\Services\Project\ProjectQuery;
use Modules\Master\Services\Category\CategoryQuery;

class Projects extends Component
{
    use WithPagination;

    public $isHomepage;
    public $kategori;
    public $perPage = 1;

    protected $queryString = [
        'kategori',
    ];

    public function mount($homepage = false)
    {
        $this->isHomepage = $homepage;
    }

    public function getAll()
    {
        $limit = $this->isHomepage ? 4 : $this->perPage;
        return (new ProjectQuery())->filters((object) [
            'category' => $this->kategori,
            'is_active' => true,
            'sort' => 'created_at',
            'order' => 'desc',
        ], $limit);
    }

    public function updatedKategori($value)
    {
        $this->resetPage();
        $this->dispatchBrowserEvent('init-gallery');
    }

    public function updatedPage($value)
    {
        $this->dispatchBrowserEvent('init-gallery');
    }

    public function loadMore()
    {
        $this->perPage += 1;
        $this->dispatchBrowserEvent('init-gallery');
    }

    public function find($slug)
    {
        $this->kategori = $slug;
    }

    public function render()
    {
        $projects = $this->getAll();
        $galleries = $projects->map(function ($project, $index) {
            return [
                'src' => $project->thumbnail ? url($project->thumbnail) : null,
                'thumb' => $project->thumbnail ? url($project->thumbnail) : null,
                'subHtml' => '#caption-' . $index,
            ];
        });
        return view('front::livewire.projects', [
            'categories' => (new CategoryQuery())->getByTableReference('projects'),
            'projects' => $projects,
            'galleries' => $galleries,
        ]);
    }
}