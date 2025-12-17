<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>

                @auth
                    @if (auth()->user()->role == 1)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Add Products</a></li>
                                <li><a class="dropdown-item" href="#">List Products</a></li>
                            </ul>
                        </li>
                    @endif
                    @if (auth()->user()->role == 2)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Add Products</a></li>
                                <li><a class="dropdown-item" href="#">List Products</a></li>
                            </ul>
                        </li>
                    @endif
                @endauth
            </ul>


            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post" class="d-flex">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-outline-danger btn-sm">Login</a>
                        <a href="{{ route('registration') }}" class="btn btn-outline-danger btn-sm">Register</a>
                    </li>
                @endauth


            </ul>
        </div>
    </div>
</nav>
