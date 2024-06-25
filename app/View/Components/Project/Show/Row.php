<?php

namespace App\View\Components\Project\Show;

use App\Models\Project;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Row extends Component
{

    public $id;
    public $title;
    public $skills;
    public $links;
    public $dates;

    public function __construct(Project $project)
    {
        $this->id = $project->id;
        $this->dates = $project->formatedDates;
        $this->title = $project->title;
        $this->skills = $project->skills;
        $this->links = $project->links;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project.show.row');
    }
}
