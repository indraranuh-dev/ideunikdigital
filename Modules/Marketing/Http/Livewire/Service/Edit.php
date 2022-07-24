<?php

namespace Modules\Marketing\Http\Livewire\Service;

use App\Contracts\WithImageUpload;
use App\Http\Livewire\ImageUpload;
use Livewire\Component;
use Modules\Marketing\Entities\Service;

class Edit extends Component
{
    use WithImageUpload;

    /**
     * Form properties
     *
     * @var bool
     */
    public $service, $name, $image, $oldImage, $is_active;

    /**
     * Define event listeners
     *
     * @var array
     */
    public $listeners = [
        ImageUpload::EVENT_VALUE_UPDATED,
    ];

    public function mount($service)
    {
        $this->service = $service;
        $this->name = $service->name;
        $this->oldImage = $service->media_path;
        $this->is_active = $service->is_active ? true : false;
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
     * Update existing service
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

        $service = Service::find($this->service->id);
        $service->update($data);

        return session()->flash('success', 'Partner berhasil diperbarui');
    }

    public function render()
    {
        return view('marketing::livewire.service.edit');
    }
}