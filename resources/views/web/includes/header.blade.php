{{--  @dd($socialmedia);  --}}
<!-- Header Start -->

    <header>
        <!-- Topbar Start -->
        <section class="section_topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="d-flex gap-3">
                            @foreach ($socialmedia as $link)
                            <a href="{{ $link['link'] }}" target="_blank">
                                <img class="img-circle" src="{{ Storage::url($link['img_url']) }}" alt="{{ $link['type'] }}" height="32" width="32" style="border-radius: 50%" alt="Your Image Alt Text">
                            </a>
                            @endforeach 
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="d-flex gap-4 justify-content-md-end">
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="site search">
                                    <button type="submit" class="btn-search">
                                        <img src="assets/web/images/icon_search.png" alt="search">
                                    </button>
                                </div>
                            </form>
                            <a href="#" class="btn btn-primary">
                                <span>sponsors login</span>
                                <img src="assets/web/images/icon_log.png" alt="icon login" class="icon-login">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Topbar End -->
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset($largelogo) }}" alt="logo" class="img-logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                        <li class="nav-item"><a class="nav-link active" href="{{ route('web.index') }}">home</a></li>
                        <li class="nav-item dropdown-link">
                            <a class="nav-link" href="{{ route('web.about') }}">about us</a>
                            <ul class="dropdown-content">
                                <li><a href="{{ route('web.who-we-are') }}">who we are</a></li>
                                <li><a href="{{ route('web.team') }}">team</a></li>
                                <li><a href="{{ route('web.contactus') }}">contact us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown-link">
                            <a class="nav-link" href="{{ route('web.membership') }}">membership</a>
                            <ul class="dropdown-content">
                                <li><a href="{{ route('web.join') }}">join</a></li>
                                <li><a href="{{ route('web.benefits') }}">benefits</a></li>
                                <li><a href="{{ route('web.programs') }}">programs</a></li>
                                <li><a href="{{ route('web.evaluation') }}">evaluation</a></li>
                                <li><a href="{{ route('web.rules_of_engagement') }}">rules of engagement</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown-link">
                            <a class="nav-link" href="{{ route('web.sectors') }}">sectors</a>
                            <ul class="dropdown-content">
                                <li><a href="{{ route('web.rules_of_engagement') }}">construction</a></li>
                                <li><a href="{{ route('web.rules_of_engagement') }}">agriculture</a></li>
                                <li><a href="{{ route('web.rules_of_engagement') }}">supply chain</a></li>
                                <li><a href="{{ route('web.rules_of_engagement') }}">technology</a></li>
                                <li><a href="{{ route('web.rules_of_engagement') }}">natural resources</a></li>
                                <li><a href="{{ route('web.rules_of_engagement') }}">energy</a></li>
                                <li><a href="{{ route('web.rules_of_engagement') }}">textiles</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown-link">
                            <a class="nav-link" href="{{ route('web.rules_of_engagement') }}">advocacy</a>
                            <ul class="dropdown-content">
                                <li><a href="{{ route('web.rules_of_engagement') }}">small businesses</a></li>
                                <li><a href="{{ route('web.rules_of_engagement') }}">women</a></li>
                                <li><a href="{{ route('web.rules_of_engagement') }}">veterans</a></li>
                                <li><a href="{{ route('web.rules_of_engagement') }}">support services</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown-link">
                            <a class="nav-link" href="{{ route('web.rules_of_engagement') }}">events</a>
                            <ul class="dropdown-content">
                                <li><a href="{{ route('web.rules_of_engagement') }}">event calendar</a></li>
                                <li><a href="{{ route('web.rules_of_engagement') }}">event request</a></li>
                                <li><a href="{{ route('web.rules_of_engagement') }}">international events</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('web.rules_of_engagement') }}">blog</a>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasExample">
                                <img src="assets/web/images/icon_menu.png" alt="menu" class="img-menu">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="ps-0">
                    <li class="offcanvas-menu">
                        <a href="{{ route('web.rules_of_engagement') }}" class="link">financial</a>
                        <ul class="sub_menu">
                            <li><a href="{{ route('web.rules_of_engagement') }}">grants</a></li>
                            <li><a href="{{ route('web.rules_of_engagement') }}">funding</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="ps-0">
                    <li class="offcanvas-menu">
                        <a href="{{ route('web.rules_of_engagement') }}" class="link">partners / sponsors</a>
                        <ul class="sub_menu">
                            <li><a href="{{ route('web.rules_of_engagement') }}">become a partner</a></li>
                            <li><a href="{{ route('web.rules_of_engagement') }}">become a sponsor</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="ps-0">
                    <li class="offcanvas-menu">
                        <a href="{{ route('web.rules_of_engagement') }}" class="link">outreach</a>
                        <ul class="sub_menu">
                            <li><a href="{{ route('web.rules_of_engagement') }}">chad</a></li>
                            <li><a href="{{ route('web.rules_of_engagement') }}">ghana</a></li>
                            <li><a href="{{ route('web.rules_of_engagement') }}">south africa</a></li>
                            <li><a href="{{ route('web.rules_of_engagement') }}">zimbabwe</a></li>
                            <li><a href="{{ route('web.rules_of_engagement') }}">cameroon</a></li>
                            <li><a href="{{ route('web.rules_of_engagement') }}">drc</a></li>
                            <li><a href="{{ route('web.rules_of_engagement') }}">cote d'ivoire</a></li>
                            <li><a href="{{ route('web.rules_of_engagement') }}">usa</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="ps-0">
                    <li class="offcanvas-menu">
                        <a href="{{ route('web.rules_of_engagement') }}" class="link">opportunities</a>
                        <ul class="sub_menu">
                            <li><a href="{{ route('web.rules_of_engagement') }}">agriculture</a></li>
                            <li><a href="{{ route('web.rules_of_engagement') }}">construction</a></li>
                            <li><a href="{{ route('web.rules_of_engagement') }}">mining</a></li>
                            <li><a href="{{ route('web.rules_of_engagement') }}">rfx</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="ps-0">
                    <li class="offcanvas-menu">
                        <a href="{{ route('web.rules_of_engagement') }}" class="link">careers</a>
                        <ul class="sub_menu">
                            <li><a href="{{ route('web.rules_of_engagement') }}">job openings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Navbar End -->
    </header>