<?php

namespace App\View\Components\Frontend;

use App\Models\Category;
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
    public $category;
    public function __construct($category)
    {
        $this->category= Category::findOrfail($category);
        $categoryId = $this->category->id;
        $this->ourFeatures = Post::whereHas('categories', function ($query) use ($categoryId) {
            $query->where('category_id', $categoryId);
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
