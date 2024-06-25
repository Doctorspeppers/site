<?php

namespace App\View\Components\Inputs;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dates extends Component
{

    public $name;

    public $dates;

    public function __construct($name, $dates = [])
    {
        $this->name = $name;
        $this->dates = $dates;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputs.dates');
    }
}
