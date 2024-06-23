<?php

namespace App\View\Components\Inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MultipleSelect extends Component
{
    public $options;
    public $selected;

    public $name;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $options = [], $selected = [])
    {
        $this->options = $options ?? [];
        $this->selected = array_combine($selected, $selected);
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputs.multiple-select');
    }
}
