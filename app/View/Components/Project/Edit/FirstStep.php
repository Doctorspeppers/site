<?php

namespace App\View\Components\Project\Edit;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FirstStep extends Component
{
    public $project;

    public function __construct($project)
    {
        $this->project = $project;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project.edit.first-step');
    }
}
