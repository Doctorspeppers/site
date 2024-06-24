<?php

namespace App\View\Components\Curriculum;

use Closure;
use App\Models\Curriculum;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Row extends Component
{

    public $id;
    public $name;
    public $nick;
    public $skills;

    public function __construct( $curriculum)
    {
        $this->name = $curriculum->user->name;
        $this->nick = $curriculum->user->nick;
        $this->skills = $curriculum->skills;
        $this->id = $curriculum->id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.curriculum.row');
    }
}
