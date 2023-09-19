<!-- resources/views/layouts/navbar.blade.php -->

<nav class="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Roumbalsque</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('menu') }}">Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </div>
</nav>
