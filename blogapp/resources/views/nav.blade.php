<nav class="navbar navbar-expand-md navbar-light bg-light shadow" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/blog">
            <p> ShamkhX </p>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                @if ($username != "")
                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="/profile">
                        <span class="text-primary">{{ $username }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="/about">About</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="/contact">Contact</a>
                </li> --}}
                
                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="/logout">Logout</a>
                </li>
                @else

                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="/about">About</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="/contact">Contact</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="/register">
                        <span class="text-primary">Register/Login</span>
                    </a>
                </li>

                @endif

            </ul>
        </div>
    </div>
</nav>
