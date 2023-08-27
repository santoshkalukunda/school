<?php

namespace App\View\Components\frontend;

use App\Models\Post;
use Illuminate\View\Component;

class CompletedProjectsView extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $completedProjects;
    public function __construct()
    {
        $categoryID = 3;
        $this->completedProjects = Post::whereHas('categories', function ($query) use ($categoryID) {
            $query->where('category_id', $categoryID);
        })
            ->published()
            ->latest()
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.completed-projects-view');
    }
}
