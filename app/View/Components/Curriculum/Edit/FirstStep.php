<?php

namespace App\View\Components\Curriculum\Edit;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FirstStep extends Component
{
    public $curriculum;

    public function __construct($curriculum)
    {
        $this->curriculum = $curriculum;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.curriculum.edit.first-step');
    }
}
