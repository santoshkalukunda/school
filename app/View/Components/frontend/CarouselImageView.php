<?php

namespace App\View\Components\frontend;

use App\Models\CarouselImage;
use Illuminate\View\Component;

class CarouselImageView extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $carouselImages;

    public function __construct()
    {
       $this->carouselImages = CarouselImage::latest()->published()->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.carousel-image-view');
    }
}
