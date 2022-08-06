<?php

namespace Modules\Marketing\Http\Livewire\Project;

use App\Contracts\WithEditor;
use App\Contracts\WithImageFilepond;
use App\Http\Livewire\Editor;
use App\Http\Livewire\Filepond\Image;
use Livewire\Component;
use Modules\Marketing\Entities\Project;
use Modules\Marketing\Entities\Service;
use Modules\Master\Services\Category\CategoryQuery;

class Create extends Component
{
    use WithImageFilepond, WithEditor;

    /**
     * Form properties
     *
     * @var bool
     */
    public $name, $service, $category;
    public $image, $client_name, $description, $study_case;
    public $is_active = true;

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
            'service' => 'required|max:191',
            'category' => 'required|max:191',
            'description' => 'required',
            'image' => 'required|max:191',
            'client_name' => 'nullable|max:191',
            'study_case' => 'nullable|max:191',
            'is_active' => 'nullable|boolean',
        ];
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
        $this->image = $value;
    }

    /**
     * Store project to database
     *
     * @return void
     */
    public function store()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'slug_name' => slug($this->name),
            'service_id' => $this->service,
            'category_id' => $this->category,
            'description' => $this->description,
            'client_name' => $this->client_name,
            'study_case' => $this->study_case,
            'is_active' => $this->is_active ? 1 : 0,
        ];

        if ($this->image) {
            $data['thumbnail'] = $this->image;
        }

        Project::create($data);

        $this->reset();

        // Emit to editor editor, reset text ditor
        $this->resetEditor();
        $this->resetImageFilepond();

        return session()->flash('success', 'Proyek berhasil ditambahkan');
    }

    public function render()
    {
        return view('marketing::livewire.project.create', [
            'categories' => (new CategoryQuery())->getByTableReference('projects'),
            'services' => (new Service())->get(['id', 'name']),
        ]);
    }
}