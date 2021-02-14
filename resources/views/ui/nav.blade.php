<header class="navbar-laravel">
    <nav class="navbar navbar-expand-lg position-fixed w-100 shadow-lg">
        <div class="container-fluid">
            <a href="{{ route('index') }}" class="navbar-brand">
                <h2 class="navbar-title">OuTogether</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}"
                                class="text-sm nav-link text-gray-700 underline">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" id="logoutLink" class="nav-link">Déconnexion</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('event.create') }}" class="nav-link">Proposez une sortie</a>
                        </li>
                        <form method="POST" class="none" action="{{ route('logout') }}" id="logoutForm">
                            @csrf
                        </form>

                    @else
                        <li class="nav-item">
                            <a href=" {{ route('login') }}" class="text-sm nav-link text-gray-700 underline">Se
                                connecter</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}"
                                    class="ml-4 nav-link text-sm text-gray-700 underline">Enregistez-vous</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>

        </div>
    </nav>
</header>
