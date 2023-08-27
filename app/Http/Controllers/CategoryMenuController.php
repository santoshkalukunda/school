<?php

namespace App\Http\Controllers;

use App\Models\CategoryMenu;
use App\Http\Requests\StoreCategoryMenuRequest;
use App\Http\Requests\UpdateCategoryMenuRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryMenu $categoryMenu = null)
    {
        $categoryMenus = CategoryMenu::positioned()->get();
        $categories = Category::with(['childCategories.childCategories'])->where('parent_id', null)->whereNotIn('id', function ($query) {
            $query->select('category_id')->from('category_menus');
        })
            ->latest()
            ->get();

        if (!$categoryMenu) {
            $categoryMenu = new CategoryMenu();
        }

        return view('category-menu.index', compact(['categoryMenus', 'categories', 'categoryMenu']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryMenuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryMenuRequest $request)
    {
        $categoryMenu = new CategoryMenu();
        $categoryMenu->category_name = 'catalog_menu';
        $categoryMenu->category_id = $request->category_id;
        $categoryMenu->display_name = $request->display_name ?? Category::find($request->category_id)->name;
        $categoryMenu->position = 100;
        $categoryMenu->save();

        return redirect()
            ->back()
            ->with('success', 'Item added to menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryMenu  $categoryMenu
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryMenu $categoryMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryMenu  $categoryMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryMenu $categoryMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryMenuRequest  $request
     * @param  \App\Models\CategoryMenu  $categoryMenu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryMenuRequest $request, CategoryMenu $categoryMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryMenu  $categoryMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryMenu $categoryMenu)
    {
        //
    }

    public function sort(Request $request)
    {
        $menuItems = json_decode(json_encode($request->menuItems));

        foreach ($menuItems as $menuItem) {
            CategoryMenu::whereId($menuItem->id)->update(['position' => $menuItem->position]);
        }

        return response()->json(['message' => 'Menu has been sorted'], 200);
    }

    public function removeItem(Request $request)
    {
        CategoryMenu::find($request->id)->delete();

        return response()->json(['message' => 'Item removed'], 200);
    }
}
