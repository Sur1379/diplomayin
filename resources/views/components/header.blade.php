<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{asset('images/logo_arm.svg')}}" width="180px" height="60px" alt="logo"/>
            </a>
            <div id="nav-icon4" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" class="d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    @foreach($key['links'] as $link)
                    <li class="nav-item">
                        <a class="nav-link" href={{url($link['link'])}}>{{$link['text']}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>
