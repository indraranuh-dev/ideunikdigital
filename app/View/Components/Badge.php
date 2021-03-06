<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public $state, $icon, $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($state = 'success', $icon, $text = '')
    {
        $this->state = $state;
        $this->icon = $icon;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.badge');
    }
}