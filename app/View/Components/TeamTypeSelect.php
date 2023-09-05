<?php

namespace App\View\Components;

use App\Models\Team;
use App\Models\TeamType;
use Illuminate\View\Component;

class TeamTypeSelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $team;
    public $teamTypes;
    public function __construct(Team $team = null)
    {
        $this->team = $team;
        $this->teamTypes = TeamType::get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.team-type-select');
    }
}
