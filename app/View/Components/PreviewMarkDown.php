<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PreviewMarkDown extends Component
{
    public $label;
    public $input;
    public $preview;

    public function __construct($label, $input, $preview)
    {
        $this->label = $label;
        $this->input = $input;
        $this->preview = $preview;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.preview-mark-down');
    }
}
