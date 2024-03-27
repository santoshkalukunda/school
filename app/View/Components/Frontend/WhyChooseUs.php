<?php

namespace App\View\Components\Frontend;

use App\Models\Category;
use App\Models\Post;
use Illuminate\View\Component;

class WhyChooseUs extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $posts;
    public $category;
    public function __construct($category)
    {
        $this->category = Category::findOrFail($category);
        $categoryID = $this->category->id;
        $this->posts = Post::whereHas('categories', function ($query) use ($categoryID) {
            $query->where('category_id', $categoryID);
        })
            ->published()
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.why-choose-us');
    }
}
