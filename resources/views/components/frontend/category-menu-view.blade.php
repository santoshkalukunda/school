 @foreach ($categoryMenus as $categoryMenu)
     @foreach ($categories as $category)
         @if ($categoryMenu->category_id == $category->id)
             @if ($category->childCategories->isEmpty())
                 <a class="nav-item nav-link" href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
             @else
                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ $category->name }}</a>
                     <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">

                         @foreach ($category->childCategories as $secondLevelCategory)
                             <a class="dropdown-item"
                                 href="{{ route('categories.show', $secondLevelCategory) }}">{{ $secondLevelCategory->name }}</a>
                         @endforeach
                     </div>
                 </div>
             @endif
         @endif
     @endforeach
 @endforeach
