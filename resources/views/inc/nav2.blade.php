<header>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1" style="color: red">WebDev</span>

    <ul class="nav justify-content-center grey lighten-4 py-4">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}" style="color: slategrey;">Главная</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('blog') }}" style="color: slategrey;">Блог</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/#pricing" style="color: slategrey;">Цены</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="{{ route('contact') }}" style="color: slategrey;">Контакты</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="/admin" style="color: slategrey;">Стаф</a>
            </li>
    </ul>
</nav>
