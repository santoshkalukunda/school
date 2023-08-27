<?php

namespace App\View\Components\frontend;

use App\Models\Team;
use Illuminate\View\Component;

class TeamsView extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $teams;
    public function __construct()
    {
        $this->teams = Team::published()
            ->orderBy('position')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.teams-view');
    }
}
