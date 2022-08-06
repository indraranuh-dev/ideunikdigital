<?php

namespace Modules\Marketing\Http\Livewire\Service;

use App\Contracts\WithEditor;
use App\Contracts\WithImageFilepond;
use App\Http\Livewire\Editor;
use App\Http\Livewire\Filepond\Image;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Modules\Marketing\Entities\Service;
use Modules\Marketing\Services\Service\ServiceQuery;

class Create extends Component
{
    use WithImageFilepond, WithEditor;

    /**
     * Form properties
     *
     * @var bool
     */
    public $logo, $name, $slug_name, $short_description, $description;
    public $email, $embed_maps, $whatsapp, $whatsapp_text, $address;
    public $header_image,
    $cta_heading = 'Try our service.',
    $cta_sub_heading = 'See how we optimize your site’s performances and grow your business!',
    $cta_button_text = 'Hubungi Kami',
    $is_active = true;

    /**
     * Define event listeners
     *
     * @var array
     */
    public $listeners = [
        Editor::EVENT_VALUE_UPDATED,
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
            'slug_name' => 'required|max:191',
            'short_description' => 'required|max:191',
            'description' => 'required',
            'email' => 'nullable|max:191',
            'whatsapp' => 'nullable|max:191',
            'whatsapp_text' => 'nullable|max:191',
            'address' => 'nullable|max:191',
            'embed_maps' => 'nullable',
            'cta_heading' => 'required|max:191',
            'cta_sub_heading' => 'required|max:191',
            'cta_button_text' => 'required|max:191',
            'is_active' => 'nullable|boolean',
        ];
    }

    public function updatedName($value)
    {
        $this->slug_name = slug($value);
    }

    /**
     * Hooks for description property
     * When editor editor has been updated,
     * Description property will be update
     *
     * @param  string $value
     * @return void
     */
    public function editor_value_updated($value)
    {
        $this->description = $value;
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
     * Store service to database
     *
     * @return void
     */
    public function store()
    {
        $this->validate();

        $latest = (new ServiceQuery())->getLastPosition();

        $data = [
            'name' => $this->name,
            'slug_name' => $this->slug_name,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'email' => $this->email,
            'whatsapp' => $this->whatsapp,
            'whatsapp_text' => $this->whatsapp_text,
            'address' => $this->address,
            'embed_maps' => $this->embed_maps,
            'cta_heading' => $this->cta_heading,
            'cta_sub_heading' => $this->cta_sub_heading,
            'cta_button_text' => $this->cta_button_text,
            'is_active' => $this->is_active ? 1 : 0,
            'position' => $latest ? $latest->position + 1 : 1,
        ];

        if ($this->logo) {
            $data['logo'] = $this->logo;
        }

        if ($this->header_image) {
            $data['header_image'] = $this->header_image;
        }

        Service::create($data);

        $this->reset();

        $services = (new ServiceQuery())->getPublicServices();
        Cache::forget('services');
        Cache::forever('services', $services);

        // Emit to editor editor, reset text ditor
        $this->resetEditor();
        $this->resetImageFilepond();

        return session()->flash('success', 'Layanan berhasil ditambahkan');
    }

    public function render()
    {
        return view('marketing::livewire.service.create');
    }
}