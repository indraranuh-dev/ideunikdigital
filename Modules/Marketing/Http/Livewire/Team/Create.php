<?php

namespace Modules\Marketing\Http\Livewire\Team;

use App\Contracts\WithImageFilepond;
use App\Http\Livewire\Filepond\Image;
use Livewire\Component;
use Modules\Marketing\Entities\Team;
use Modules\Marketing\Services\Team\TeamQuery;

class Create extends Component
{
    use WithImageFilepond;

    /**
     * Form properties
     *
     * @var bool
     */
    public $image, $name, $job_title;
    public $is_active = true;

    /**
     * Define event listeners
     *
     * @var array
     */
    public $listeners = [
        Image::EVENT_VALUE_UPDATED,
    ];

    /**
     * Form validation rules
     *
     * @return void
     */
    protected function rules()
    {
        return [
            'name' => 'required|max:191',
            'job_title' => 'required|max:191',
            'image' => 'required|max:191',
            'is_active' => 'nullable|boolean',
        ];
    }

    /**
     * Hooks for thumbnail property
     * When image-upload has been updated,
     * Thumbnail property will be update
     *
     * @param  string $value
     * @return void
     */
    public function images_value_updated($value)
    {
        $component = $value['component'];
        $val = $value['value'];
        $this->$component = $val;
    }

    /**
     * Store tim to database
     *
     * @return void
     */
    public function store()
    {
        $this->validate();

        $latest = (new TeamQuery())->getLastPosition();

        $data = [
            'name' => $this->name,
            'job_title' => $this->job_title,
            'is_active' => $this->is_active ? 1 : 0,
            'position' => $latest ? $latest->position + 1 : 1,
        ];

        if ($this->image) {
            $data['media_path'] = $this->image;
        }

        Team::create($data);

        $this->reset();

        // Emit to editor editor, reset text ditor
        $this->resetImageFilepond();

        return session()->flash('success', 'Tim berhasil ditambahkan');
    }

    public function render()
    {
        return view('marketing::livewire.team.create');
    }
}