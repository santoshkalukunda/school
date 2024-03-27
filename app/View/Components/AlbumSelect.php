<?php

namespace App\View\Components;

use App\Models\Gallery;
use Illuminate\View\Component;

class AlbumSelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $gallery;
    public $galleries;
    public function __construct(Gallery $gallery = null)
    {
        $this->gallery = $gallery;
        $this->galleries = Gallery::get('albums');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.album-select');
    }
}
