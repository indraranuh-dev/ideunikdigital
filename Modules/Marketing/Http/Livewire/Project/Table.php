<?php

namespace Modules\Marketing\Http\Livewire\Project;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Marketing\Entities\Project;
use Modules\Marketing\Entities\Service;
use Modules\Marketing\Services\Project\ProjectQuery;
use Modules\Marketing\Services\Project\TableConfig;
use Modules\Marketing\Services\Project\TableFilterActions;
use Modules\Master\Services\Category\CategoryQuery;

class Table extends Component
{
    use WithPagination, TableConfig, TableFilterActions;

    /**
     * Define query string props
     *
     * @var string
     */
    public $sort = 'position', $order = 'asc', $service, $category, $is_active, $search, $destroyId, $perPage = 10;

    /**
     * Define props value before component rendered
     *
     * @return void
     */
    public function mount()
    {
        $this->mountDefaultValues();
    }

    /**
     * Define livewire query string
     *
     * @var array
     */
    protected $queryString = [
        'category',
        'service',
        'is_active',
        'sort',
        'order',
        'search',
    ];

    /**
     * Get all projects from database
     *
     * @return void
     */
    public function getAllProjects()
    {
        return (new ProjectQuery())->filters((object) [
            'service' => $this->service,
            'category' => $this->category,
            'is_active' => $this->is_active,
            'search' => $this->search,
            'sort' => $this->sort,
            'order' => $this->order,
        ], $this->perPage);
    }

    /**
     * Change project status bocome show or hide
     *
     * @param  mixed $id
     * @return void
     */
    public function showOrHide($id)
    {

        $project = Project::find($id);

        // Check if project not null
        if ($project) {

            $projectStatus = $project->is_active ? 'disembunyikan dari' : 'ditampilkan di';
            $project->update([
                'is_active' => $project->is_active ? 0 : 1,
            ]);
            return session()->flash('success', 'Project berhasil ' . $projectStatus . ' halaman publik.');

        }

        return session()->flash('failed', 'Project tidak ditemukan, pengubahan visibilitas gagal.');
    }

    /**
     * Destroy project from database
     *
     * @return void
     */
    public function destroy()
    {
        $project = Project::where('id', $this->destroyId)->first();

        // Check if project have a thumbnail
        if ($project) {

            $project->delete();
            return session()->flash('success', 'Project berhasil dihapus.');
        }

        return session()->flash('failed', 'Project tidak ditemukan.');
    }

    public function render()
    {
        return view('marketing::livewire.project.table', [
            'projects' => $this->getAllProjects(),
            'services' => Service::get(['id', 'name']),
            'categories' => (new CategoryQuery())->getByTableReference('projects'),
        ]);
    }
}