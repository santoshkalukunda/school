   <div class="navbar-nav ml-auto">
       <a href="{{ route('index') }}"
           class="nav-item nav-link {{ request()->route()->getName() == 'index'? 'active': '' }}">Home</a>
       <a href="{{ route('about') }}"
           class="nav-item nav-link {{ request()->route()->getName() == 'about'? 'active': '' }}">About</a>
       @foreach ($categoryMenus as $categoryMenu)
           @foreach ($categories as $category)
               @if ($categoryMenu->category_id == $category->id)
                   @if ($category->childCategories->isEmpty())
                       <a href="program.html" class="nav-item nav-link text-capitalize">{{ $category->name }}</a>
                   @else
                       <div class="nav-item dropdown">
                           <a href="#" class="nav-link dropdown-toggle"
                               data-toggle="dropdown">{{ $category->name }}</a>
                           <div class="dropdown-menu">
                               @foreach ($category->childCategories as $secondLevelCategory)
                                   <a href="single.html" class="dropdown-item text-capitalize">{{ $secondLevelCategory->name }}</a>
                               @endforeach
                           </div>
                       </div>
                   @endif
               @endif
           @endforeach
       @endforeach
       <a href="{{ route('contact-us') }}" class="nav-item nav-link">Contact</a>
   </div>
