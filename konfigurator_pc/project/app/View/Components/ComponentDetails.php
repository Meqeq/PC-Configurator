<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ComponentDetails extends Component
{
    public $component;
    public $action;
    public $comp;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($component, $action, $comp)
    {
        $this->component = $component;
        $this->action = $action;
        $this->comp = $comp;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.component-details');
    }
}
