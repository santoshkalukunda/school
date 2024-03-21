<?php

namespace App\View\Components\Frontend;

use App\Models\Page;
use Illuminate\View\Component;

class PageComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $page;
    public function __construct($page)
    {
        $this->page = Page::Published()->findOrFail($page);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.page-component');
    }
}
