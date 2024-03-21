<?php

namespace App\View\Components\Frontend;

use App\Models\Page;
use Illuminate\View\Component;

class AboutUs extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $aboutUs;
    public function __construct()
    {
        $this->aboutUs = Page::findOrFail(1);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.about-us');
    }
}
