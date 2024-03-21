<?php

namespace App\View\Components\Frontend;

use App\Models\Post;
use Illuminate\View\Component;

class OurFeature extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $ourFeatures;
    public function __construct()
    {
        $categoryID = 1;
        $this->ourFeatures = Post::whereHas('categories', function ($query) use ($categoryID) {
            $query->where('category_id', $categoryID);
        })
            ->published()
            ->latest()
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.our-feature');
    }
}
