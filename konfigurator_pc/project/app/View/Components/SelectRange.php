<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectRange extends Component
{
    public $name;
    public $display;
    public $min;
    public $max;
    public $step;

    /**
     * Create a new component instance.    
     *
     * @return void
     */
    public function __construct($name, $display, $min, $max, $step) {
        $this->name = $name;
        $this->display = $display;
        $this->min = $min;
        $this->max = $max;
        $this->step = $step;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.select-range');
    }
}
