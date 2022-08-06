<?php

namespace Modules\Marketing\Http\Livewire\Team;

use App\Contracts\WithImageFilepond;
use App\Http\Livewire\Filepond\Image;
use Livewire\Component;
use Modules\Marketing\Entities\Team;

class Edit extends Component
{
    use WithImageFilepond;

    /**
     * Form properties
     *
     * @var bool
     */
    public $team;
    public $image, $old_image, $name, $job_title;
    public $is_active = true;

    public function mount($team)
    {
        $this->team = $team;
        $this->old_image = $team->media_path;
        $this->name = $team->name;
        $this->job_title = $team->job_title;
        $this->is_active = $team->is_active ? true : false;
    }

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
            'image' => 'nullable|max:191',
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
        $this->image = $value;
    }

    /**
     * Update existing team
     *
     * @return void
     */
    public function update()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'job_title' => $this->job_title,
            'is_active' => $this->is_active ? 1 : 0,
        ];

        if ($this->image) {
            $data['media_path'] = $this->image;
        }

        $team = Team::find($this->team->id);
        $team->update($data);

        return session()->flash('success', 'Tim berhasil diperbarui');
    }

    public function render()
    {
        return view('marketing::livewire.team.edit');
    }
}