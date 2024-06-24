<?php

namespace App\View\Components\Inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PreviewMarkDown extends Component
{
    public $label;
    public $input;
    public $preview;

    public $value;

    public function __construct($label, $input, $preview, $value = '')
    {
        $this->label = $label;
        $this->input = $input;
        $this->preview = $preview;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputs.preview-mark-down');
    }
}
