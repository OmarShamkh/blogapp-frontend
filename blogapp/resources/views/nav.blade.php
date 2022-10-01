<nav class="navbar navbar-expand-lg navbar-light bg-light shadow" id="mainNav">
    <div class="container-fluid">
        <a class="navbar-brand" href="/blog">My Blog</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                @if ($username != "")
                <li class="nav-item text-black">
                    <p class="text-black font-weight-bold pt-2 pr-1">{{$username}} </p>
                </li>
                <li class="nav-item text-black">
                    <a class="nav-link text-black font-weight-bold" href="/logout">Logout</a>
                </li>
                @else

                <li class="nav-item text-black">
                    <a class="nav-link text-black font-weight-bold" href="/login">Register/Login</a>
                </li>

                @endif

            </ul>
        </div>
    </div>
</nav>