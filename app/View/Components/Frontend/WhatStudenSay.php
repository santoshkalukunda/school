<?php

namespace App\View\Components\Frontend;

use App\Models\Post;
use Illuminate\View\Component;

class WhatStudenSay extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
   public  $posts;
    public function __construct()
    {
        $categoryID = 5;
        $this->posts = Post::whereHas('categories', function ($query) use ($categoryID) {
            $query->where('category_id', $categoryID);
        })
            ->published()
            ->latest()
            ->paginate(6);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.what-studen-say');
    }
}
