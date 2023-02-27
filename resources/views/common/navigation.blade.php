<nav>
    <a href="{{ route('homepage') }}">
        @if ($current_page === 'homepage')
            <strong>Home</strong>
        @else
            Home
        @endif
    </a>
    <br>
    <a href="{{ route('about-us') }}">
        @if ($current_page === 'about-us')
        <strong>About</strong>
        @else
            About
        @endif
    </a>
</nav>