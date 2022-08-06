<?php

namespace Modules\Front\Http\Livewire;

use Livewire\Component;
use Modules\Marketing\Services\Service\ServiceQuery;

class Services extends Component
{
    public function getAll()
    {
        return (new ServiceQuery())->getPublicServices();
    }

    public function render()
    {
        return view('front::livewire.services', [
            'services' => $this->getAll(),
        ]);
    }
}
