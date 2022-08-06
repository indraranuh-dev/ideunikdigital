<?php

namespace Modules\Front\Http\Livewire;

use Livewire\Component;
use Modules\Marketing\Services\Team\TeamQuery;

class Teams extends Component
{
    public function getAll()
    {
        return (new TeamQuery())->getPublicTeams();
    }

    public function render()
    {
        return view('front::livewire.teams', [
            'teams' => $this->getAll(),
        ]);
    }
}