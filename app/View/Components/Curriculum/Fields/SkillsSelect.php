<?php

namespace App\View\Components\Curriculum\Fields;

use App\Support\Skills;
use App\View\Components\Inputs\MultipleSelect;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SkillsSelect extends MultipleSelect
{
    /**
     * Create a new component instance.
     */
    public function __construct($name = 'skills', $selected = [])
    {
        $this->name = $name;
        $this->options = array_combine(Skills::all(), Skills::all());
        $this->selected = $selected ?? [];
    }
}
