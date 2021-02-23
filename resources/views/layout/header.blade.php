    <header id="site_header">
        <!-- Navbar -->
        <nav>
            <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}"> Home</a>
            <!-- <a href="{{ route('blog') }}">Blog</a>
            <a href="{{ route('about') }}">About</a> -->
            <a href="{{ route('articles') }}" class="{{ Route::currentRouteName() === 'articles' ? 'active' : '' }}">Articles API</a>
            <a href="{{ route('categories') }}" class="{{ Route::currentRouteName() === 'categories' ? 'active' : '' }}">Categories API</a>
            <a href="{{ route('tags') }}" class="{{ Route::currentRouteName() === 'tags' ? 'active' : '' }}">Tags API</a>
        </nav>
        <!-- /nav -->
    </header>