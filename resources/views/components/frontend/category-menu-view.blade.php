   <div class="navbar-nav ml-auto">

       <a href="{{ route('index') }}"
           class="nav-item nav-link {{ request()->route()->getName() == 'index'? 'active': '' }}">Home</a>
       <a href="{{ route('about') }}"
           class="nav-item nav-link {{ request()->route()->getName() == 'about'? 'active': '' }}">About</a>
       @foreach ($categoryMenus as $firstLevelCategory)
           @if ($firstLevelCategory->childCategories->isEmpty())
               <a href="program.html" class="nav-item nav-link">{{ $firstLevelCategory->name }}</a>
           @else
               <div class="nav-item dropdown">
                   <a href="#" class="nav-link dropdown-toggle"
                       data-toggle="dropdown">{{ $firstLevelCategory->name }}</a>
                   <div class="dropdown-menu">
                       @foreach ($firstLevelCategory->childCategories as $secondLevelCategory)
                           <a href="single.html" class="dropdown-item">{{ $secondLevelCategory->name }}</a>
                       @endforeach
                   </div>
               </div>
           @endif
       @endforeach
       <a href="{{ route('contact-us') }}" class="nav-item nav-link">Contact</a>
   </div>
