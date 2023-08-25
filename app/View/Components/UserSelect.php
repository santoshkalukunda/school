<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class UserSelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $users;

    public function __construct()
    {
        $this->users = User::orderBy('name')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user-select');
    }
}
