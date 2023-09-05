<?php

namespace App\View\Components\Frontend;

use App\Models\Partner;
use Illuminate\View\Component;

class PartnerView extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $partners;

    public function __construct()
    {
        $this->partners = Partner::latest()->published()->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.partner-view');
    }
}
