 @foreach ($categoryMenus as $categoryMenu)
     @foreach ($categories as $category)
         @if ($categoryMenu->category_id == $category->id)
             @if ($category->childCategories->isEmpty())
                 <li><a class="nav-link scrollto text-capitalize"
                         href="{{ route('categories.show', $category) }}">{{ $category->name }}</a></li>
             @else
                 <li class="dropdown"><a href="#"><span>{{ $category->name }}</span> <i
                             class="bi bi-chevron-down"></i></a>
                     <ul>
                         @foreach ($category->childCategories as $secondLevelCategory)
                             <li><a
                                     href="{{ route('categories.show', $secondLevelCategory) }}">{{ $secondLevelCategory->name }}</a>
                             </li>
                         @endforeach
                     </ul>
                 </li>
             @endif
         @endif
     @endforeach
 @endforeach
