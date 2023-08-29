<?php

namespace App\View\Components\frontend;

use App\Models\ModalImage;
use Illuminate\View\Component;

class ModalImageView extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $modalImages;
    public function __construct()
    {
        $this->modalImages = ModalImage::latest()->published()->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.modal-image-view');
    }
}
