<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dropdown extends Component
{
    public $withIcon, $icon, $iconSize, $color, $text, $additionalClass, $loadingState, $wireTarget;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $withIcon = 'true',
        $icon = 'bx bx-dots-horizontal-rounded',
        $iconSize = 'font-22',
        $color = 'text-option',
        $text = '',
        $additionalClass = '',
        $loadingState = '',
        $wireTarget = ''
    ) {
        $this->withIcon = $withIcon;
        $this->icon = $icon;
        $this->iconSize = $iconSize;
        $this->color = $color;
        $this->text = $text;
        $this->additionalClass = $additionalClass;
        $this->loadingState = $loadingState;
        $this->wireTarget = $wireTarget;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dropdown');
    }
}