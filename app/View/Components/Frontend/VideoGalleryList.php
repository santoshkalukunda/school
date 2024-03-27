<?php

namespace App\View\Components\Frontend;

use App\Models\Gallery;
use Illuminate\View\Component;

class VideoGalleryList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $galleries;
    public function __construct()
    {
        $this->galleries = Gallery::latest()
            ->videos()
            ->published()
            ->paginate(100);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.video-gallery-list');
    }
}
