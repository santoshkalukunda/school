<?php

namespace App\View\Components\frontend;

use App\Models\Category;
use App\Models\CategoryMenu;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class CategoryMenuView extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $categoryMenus;
    public $categories;

    public function __construct()
    {
        $this->categoryMenus = CategoryMenu::positioned()->get();

        $this->categories = Category::with('childcategories.childcategories')
            ->where('parent_id', null)
            ->actived()
            ->orderBy('name')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.category-menu-view');
    }
}
