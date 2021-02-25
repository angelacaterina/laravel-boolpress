    <header id="site_header">
        <!-- Navbar -->
        <nav>
            {{-- PAGE --}}
            <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ Route::currentRouteName() === 'about' ? 'active' : '' }}">About</a>
            <a href="{{ route('blog') }}" class="{{ Route::currentRouteName() === 'blog' ? 'active' : '' }}">Blog</a>

            {{-- RESOURCE --}}
            <a href="{{ route('articles.index') }}" class="{{ Route::currentRouteName() === 'articles.index' ? 'active' : '' }}">Articles</a>
            <a href="{{ route('categories.index') }}" class="{{ Route::currentRouteName() === 'categories.index' ? 'active' : '' }}">Categories</a>
            <a href="{{ route('tags.index') }}" class="{{ Route::currentRouteName() === 'tags.index' ? 'active' : '' }}">Tags</a>

            {{-- API --}}
            <a href="{{ route('articles_api') }}" class="{{ Route::currentRouteName() === 'articles_api' ? 'active2' : '' }}">Articles API</a>
            <a href="{{ route('categories_api') }}" class="{{ Route::currentRouteName() === 'categories_api' ? 'active2' : '' }}">Categories API</a>
            <a href="{{ route('tags_api') }}" class="{{ Route::currentRouteName() === 'tags_api' ? 'active2' : '' }}">Tags API</a>
        </nav>
        <!-- /nav -->
    </header>