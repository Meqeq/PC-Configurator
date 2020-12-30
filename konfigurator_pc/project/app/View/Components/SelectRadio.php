<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectRadio extends Component
{
    public $name;
    public $values;
    public $display;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $values, $display) {
        $this->name = $name;
        $this->values = $values;
        $this->display = $display;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.select-radio');
    }
}
