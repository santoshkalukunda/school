<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Post;
use Illuminate\View\Component;

class CategorySelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $post;
    public $categories;
    public function __construct(Post $post=null)
    {
        $this->post = $post;
        $this->categories = Category::with(['childCategories.childCategories'])->where('parent_id', null)->orderBy('name')->get();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.category-select');
    }
}
