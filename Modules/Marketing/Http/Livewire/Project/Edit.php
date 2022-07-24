<?php

namespace Modules\Marketing\Http\Livewire\Project;

use App\Contracts\WithImageUpload;
use App\Http\Livewire\ImageUpload;
use Livewire\Component;
use Modules\Marketing\Entities\Project;

class Edit extends Component
{
    use WithImageUpload;

    /**
     * Form properties
     *
     * @var bool
     */
    public $project, $name, $image, $oldImage, $is_active;

    /**
     * Define event listeners
     *
     * @var array
     */
    public $listeners = [
        ImageUpload::EVENT_VALUE_UPDATED,
    ];

    public function mount($project)
    {
        $this->project = $project;
        $this->name = $project->name;
        $this->oldImage = $project->media_path;
        $this->is_active = $project->is_active ? true : false;
    }

    /**
     * Form validation rules
     *
     * @return void
     */
    protected function rules()
    {
        return [
            'name' => 'required|max:191',
            'image' => 'nullable',
            'is_active' => 'nullable|boolean',
        ];
    }

    /**
     * Hooks for image property
     * When image-upload has been updated,
     * Image property will be update
     *
     * @param  string $value
     * @return void
     */
    public function image_uploaded($value)
    {
        $this->image = $value;
    }

    /**
     * Update existing project
     *
     * @return void
     */
    public function update()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'is_active' => $this->is_active ? 1 : 0,
        ];

        if ($this->image) {
            $data['media_path'] = $this->image;
        }

        $project = Project::find($this->project->id);
        $project->update($data);

        return session()->flash('success', 'Partner berhasil diperbarui');
    }

    public function render()
    {
        return view('marketing::livewire.project.edit');
    }
}