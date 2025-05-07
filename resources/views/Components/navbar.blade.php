<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Aplikasi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('profile') }}" class="nav-link">Profil</a></li>
                <li class="nav-item"><a href="{{ route('pengelolaan') }}" class="nav-link">Pengelolaan</a></li>
            </ul>
        </div>
    </nav>
</header>
