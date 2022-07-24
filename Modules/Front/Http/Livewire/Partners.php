<?php

namespace Modules\Front\Http\Livewire;

use Livewire\Component;
use Modules\Marketing\Services\Client\ClientQuery;

class Partners extends Component
{
    public function getAll()
    {
        return (new ClientQuery())->getPublicClients();
    }

    public function render()
    {
        return view('front::livewire.partners', [
            'partners' => $this->getAll(),
        ]);
    }
}