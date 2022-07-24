<?php

namespace Modules\Marketing\Http\Livewire\Service;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Marketing\Entities\Service;
use Modules\Marketing\Services\Service\TableConfig;
use Modules\Marketing\Services\Service\ServiceQuery;
use Modules\Marketing\Services\Service\TableFilterActions;

class Table extends Component
{
    use WithPagination, TableConfig, TableFilterActions;

    /**
     * Define query string props
     *
     * @var string
     */
    public $sort = 'position', $order = 'asc', $category, $is_active, $search, $destroyId, $perPage = 10;

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
        'is_active',
        'sort',
        'order',
        'search',
    ];

    /**
     * Get all services from database
     *
     * @return void
     */
    public function getAllServices()
    {
        return (new ServiceQuery())->filters((object) [
            'category' => $this->category,
            'is_active' => $this->is_active,
            'search' => $this->search,
            'sort' => $this->sort,
            'order' => $this->order,
        ], $this->perPage);
    }

    /**
     * Change service status bocome show or hide
     *
     * @param  mixed $id
     * @return void
     */
    public function showOrHide($id)
    {

        $service = Service::find($id);

        // Check if service not null
        if ($service) {

            $serviceStatus = $service->is_active ? 'disembunyikan dari' : 'ditampilkan di';
            $service->update([
                'is_active' => $service->is_active ? 0 : 1,
            ]);
            return session()->flash('success', 'Service berhasil ' . $serviceStatus . ' halaman publik.');

        }

        return session()->flash('failed', 'Service tidak ditemukan, pengubahan visibilitas gagal.');
    }

    /**
     * Destroy service from database
     *
     * @return void
     */
    public function destroy()
    {
        $service = Service::where('id', $this->destroyId)->first();

        // Check if service have a thumbnail
        if ($service) {

            $service->delete();
            return session()->flash('success', 'Service berhasil dihapus.');
        }

        return session()->flash('failed', 'Service tidak ditemukan.');
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
            Service::find($item['value'])->update([
                'position' => $item['order'],
            ]);
        }
    }

    public function render()
    {
        return view('marketing::livewire.service.table', [
            'services' => $this->getAllServices()
        ]);
    }
}
