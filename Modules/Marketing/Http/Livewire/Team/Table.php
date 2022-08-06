<?php

namespace Modules\Marketing\Http\Livewire\Team;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Marketing\Entities\Team;
use Modules\Marketing\Services\Team\TableConfig;
use Modules\Marketing\Services\Team\TableFilterActions;
use Modules\Marketing\Services\Team\TeamQuery;

class Table extends Component
{
    use WithPagination, TableConfig, TableFilterActions;

    /**
     * Define query string props
     *
     * @var string
     */
    public $sort = 'position', $order = 'asc', $is_active, $search, $destroyId, $perPage = 10;

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
        'is_active',
        'sort',
        'order',
        'search',
    ];

    /**
     * Get all teams from database
     *
     * @return void
     */
    public function getAllTeams()
    {
        return (new TeamQuery())->filters((object) [
            'is_active' => $this->is_active,
            'search' => $this->search,
            'sort' => $this->sort,
            'order' => $this->order,
        ], $this->perPage);
    }

    /**
     * Change team status bocome show or hide
     *
     * @param  mixed $id
     * @return void
     */
    public function showOrHide($id)
    {

        $team = Team::find($id);

        // Check if team not null
        if ($team) {

            $teamStatus = $team->is_active ? 'disembunyikan dari' : 'ditampilkan di';
            $team->update([
                'is_active' => $team->is_active ? 0 : 1,
            ]);
            return session()->flash('success', 'Tim berhasil ' . $teamStatus . ' halaman publik.');

        }

        return session()->flash('failed', 'Tim tidak ditemukan, pengubahan visibilitas gagal.');
    }

    /**
     * Destroy team from database
     *
     * @return void
     */
    public function destroy()
    {
        $team = Team::where('id', $this->destroyId)->first();

        // Check if team have a thumbnail
        if ($team) {
            $team->delete();
            return session()->flash('success', 'Tim berhasil dihapus.');
        }

        return session()->flash('failed', 'Tim tidak ditemukan.');
    }

    /**
     * Update banner position while drag n drop
     *
     * @param  mixed $list
     * @return void
     */
    public function updateOrder($list)
    {
        foreach ($list as $item) {
            Team::find($item['value'])->update([
                'position' => $item['order'],
            ]);
        }
    }

    public function render()
    {
        return view('marketing::livewire.team.table', [
            'teams' => $this->getAllTeams(),
        ]);
    }
}