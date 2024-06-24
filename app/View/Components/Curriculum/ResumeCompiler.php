<?php

namespace App\View\Components\Curriculum;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Michelf\Markdown;

class ResumeCompiler extends Component
{
    public $resume;

    public function __construct($resume)
    {

        $purifiedResume = (new \HTMLPurifier())->purify($resume);
        $this->resume = Markdown::defaultTransform($purifiedResume);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.curriculum.resume-compiler');
    }
}
