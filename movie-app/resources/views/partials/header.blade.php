<header>
        <nav
            class="nav justify-content-center mb-3 "
        >
            <a class="nav-link {{Route::currentRouteName() === 'home' ? 'bg-primary text-white' : ''}}" href="{{route('home')}}" aria-current="page"
                >Home</a
            >
            <a class="nav-link {{Route::currentRouteName() === 'archive' ? 'bg-primary text-white' : ''}}" href="{{route('archive')}}">Archive</a>
            <a class="nav-link {{Route::currentRouteName() === 'trending' ? 'bg-primary text-white' : ''}}" href="{{route('trending')}}">Trending</a>
        </nav>
        
</header>