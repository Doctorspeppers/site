<?php
namespace App\View\Components\News\Index;

use App\Models\News;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Row extends Component
{
    public $id;
    public $date;
    public $title;
    public $abstract;
    public $color;
    /**
     * Create a new component instance.
     */
    public function __construct(News $news)
    {
        $this->id = $news->id;
        $this->date = $news->date;
        $this->title = $news->title;
        $this->abstract = $news->abstract;
        $this->color = $news->color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news.index.row');
    }
}


