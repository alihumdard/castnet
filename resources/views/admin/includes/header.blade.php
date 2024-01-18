<style>
    aside.main-sidebar::-webkit-scrollbar {
        width: 0;  /* Remove scrollbar space */
        background: transparent;  /* Optional: make scrollbar invisible */
    }

    aside.main-sidebar {
        scrollbar-width: none;  /* Firefox */
    }
</style>
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            {{-- <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li> --}}

            <!-- Messages Dropdown Menu -->
            {{-- <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{url('assets/admin/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{url('assets/admin/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{url('assets/admin/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li> --}}
            <!-- Notifications Dropdown Menu -->
            {{-- <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li> --}}

            <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Log out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;
    height: 100%;
    overflow-y: auto;">
        <!-- Brand Logo -->
        <a href="{{ route('admin.index') }}" class="brand-link">
            <img src="{{url('assets/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Castnet Dev</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- SidebarSearch Form -->

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    {{-- <li class="nav-item">
                        <a href="{{route('admin.index')}}" class="nav-link {{(request()->routeIs('admin.index')) ? 'active' :''}}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li> --}}

                    {{-- <li class="nav-item {{(request()->routeIs(['admin.allpages','admin.addpage' ])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="{{ route('admin.allpages') }}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Pages
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.allpages') }}" class="nav-link {{(request()->routeIs('admin.allpages')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Pages</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.addpage') }}" class="nav-link {{(request()->routeIs('admin.addpage')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Page</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    <li class="nav-item {{(request()->routeIs(['homepage.banner','homesection1*','homesection2*','homesection3*','homesection4*','homesection5*','homesection6*','homesection7*','homesection8*','homesection9*'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                HOME
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('homepage.banner') }}" class="nav-link {{(request()->routeIs('homepage.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('homesection1.index') }}" class="nav-link {{(request()->routeIs('homesection1*')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('homesection2.index') }}" class="nav-link {{(request()->routeIs('homesection2.index')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('homesection3.index') }}" class="nav-link {{(request()->routeIs('homesection3.index')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('homesection4.index') }}" class="nav-link {{(request()->routeIs('homesection4*')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 4</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('homesection5.index') }}" class="nav-link {{(request()->routeIs('homesection5*')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 5</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('homesection6.index') }}" class="nav-link {{(request()->routeIs('homesection6*')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 6</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('homesection7.index') }}" class="nav-link {{(request()->routeIs('homesection7*')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 7</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('homesection8.index') }}" class="nav-link {{(request()->routeIs('homesection8*')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 8</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('homesection9.index') }}" class="nav-link {{(request()->routeIs('homesection9*')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 9</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  About Us section start  --}}
                    <li class="nav-item {{(request()->routeIs(['aboutus.banner','aboutus.section1','aboutus.section2','aboutus.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                ABOUT US
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutus.banner') }}" class="nav-link {{(request()->routeIs('aboutus.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutus.section1') }}" class="nav-link {{(request()->routeIs('aboutus.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutus.section2') }}" class="nav-link {{(request()->routeIs('aboutus.section2')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutus.section3') }}" class="nav-link {{(request()->routeIs('aboutus.section3')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  About Us section end  --}}

                    {{--  Who We Are Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['whoWeAre.banner','whoweare.section1','whoweare.section2'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                WHO WE ARE
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('whoWeAre.banner') }}" class="nav-link {{(request()->routeIs('whoWeAre.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('whoweare.section1') }}" class="nav-link {{(request()->routeIs('whoweare.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('whoweare.section2') }}" class="nav-link {{(request()->routeIs('whoweare.section2')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  Who We Are Page End  --}}

                    {{--  Our Team Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['ourTeam.banner','our-team*'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                OUR TEAM
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('ourTeam.banner') }}" class="nav-link {{(request()->routeIs('ourTeam.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('our-team.index') }}" class="nav-link {{(request()->routeIs('our-team*')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Team Members</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  Our Team Page End  --}}


                    {{--  Contact Us Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                CONTACT US
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section2') }}" class="nav-link {{(request()->routeIs('aboutUs.section2')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section2') }}" class="nav-link {{(request()->routeIs('aboutUs.section2')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  Contact Us Page End  --}}

                    {{--  Membership Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['membershipSection2.banner','membership.section1','membershipSection2.index','membershipSection2.create','membershipSection2.edit','membershipSection2.update'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                MEMBERSHIP
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('membershipSection2.banner') }}" class="nav-link {{(request()->routeIs('membershipSection2.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('membership.section1') }}" class="nav-link {{(request()->routeIs('membership.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('membershipSection2.index') }}" class="nav-link {{(request()->routeIs('membershipSection2.index','membershipSection2.update','membershipSection2.create','membershipSection2.edit')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  Membership Page End  --}}

                    {{--  Join Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['join.banner','joinSection1.create','joinSection1.index','joinSection1.edit'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                JOIN OUR MEMBER..
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('join.banner') }}" class="nav-link {{(request()->routeIs('join.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('joinSection1.index') }}" class="nav-link {{(request()->routeIs('joinSection1.index','joinSection1.create','joinSection1.edit')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  Join Page End  --}}

                    {{--  Benefits Page Start  --}}
                    <li class="nav-item  {{(request()->routeIs(['benefits.banner'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                MEMBERSHIP BENE..
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('benefits.banner') }}" class="nav-link {{(request()->routeIs('benefits.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                         </ul>
                    </li>
                    {{--  Benefits Page End  --}}

                    {{--  Programs Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['programs.banner'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                MEMBERSHIP PROG..
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('programs.banner') }}" class="nav-link {{(request()->routeIs('programs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('programs.banner') }}" class="nav-link {{(request()->routeIs('programs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  Programs Page End  --}}

                    {{--  Evaluation Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['evaluation.banner','evaluation.section1','evaluation.section3','evaluation.section5'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                EVALUATION
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('evaluation.banner') }}" class="nav-link {{(request()->routeIs('evaluation.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('evaluation.section1') }}" class="nav-link {{(request()->routeIs('evaluation.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ route('aboutUs.section2') }}" class="nav-link {{(request()->routeIs('aboutUs.section2')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="{{ route('evaluation.section3') }}" class="nav-link {{(request()->routeIs('evaluation.section3')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ route('aboutUs.section2') }}" class="nav-link {{(request()->routeIs('aboutUs.section2')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 4</p>
                                </a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="{{ route('evaluation.section5') }}" class="nav-link {{ (request()->routeIs('evaluation.section5')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 5</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ route('aboutUs.section2') }}" class="nav-link {{(request()->routeIs('aboutUs.section2')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 6</p>
                                </a>
                            </li> --}}
                        </ul>
                    </li>
                    {{--  Evaluation Page End  --}}

                    {{--  Rules of Engagement Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['roe*'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                RULES OF ENG..
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('roe.banner') }}" class="nav-link {{(request()->routeIs('roe.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('roe.section1') }}" class="nav-link {{(request()->routeIs('roe.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  Rules of Engagement Page End  --}}

                    {{--  Sectors Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['sectors*'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                SECTORS
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('sectors.banner') }}" class="nav-link {{(request()->routeIs('sectors.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sectors.index') }}" class="nav-link {{(request()->routeIs(['sectors.index','sectors.edit','sectors.create'])) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sectors</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  Sectors Page End  --}}

                    {{--  Construction Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['sector-c1cons*','sector-c2cons.section2'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                CONSTRUCTION
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('sector-c1cons.banner') }}" class="nav-link {{(request()->routeIs('sector-c1cons.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sector-c1cons.section1') }}" class="nav-link {{(request()->routeIs('sector-c1cons.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sector-c2cons.section2') }}" class="nav-link {{(request()->routeIs('sector-c2cons.section2')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  Construction Page End  --}}

                    {{--  Agriculture Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['sector-c1agr*','sector-c2agr.section2'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                AGRICULTURE
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('sector-c1agr.banner') }}" class="nav-link {{(request()->routeIs('sector-c1agr.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sector-c1agr.section1') }}" class="nav-link {{(request()->routeIs('sector-c1agr.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sector-c2agr.section2') }}" class="nav-link {{(request()->routeIs('sector-c2agr.section2')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  Agriculture Page End  --}}

                    {{--  supply chain Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['sector-c1sc*','sector-c2sc.section2'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                SUPPLY CHAIN
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('sector-c1sc.banner') }}" class="nav-link {{(request()->routeIs('sector-c1sc.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sector-c1sc.section1') }}" class="nav-link {{(request()->routeIs('sector-c1sc.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sector-c2sc.section2') }}" class="nav-link {{(request()->routeIs('sector-c2sc.section2')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  supply chain Page End  --}}

                    {{--  Technology Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['sector-c1tec*','sector-c2tec.section2'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                TECHNOLOGY
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('sector-c1tec.banner') }}" class="nav-link {{(request()->routeIs('sector-c1tec.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sector-c1tec.section1') }}" class="nav-link {{(request()->routeIs('sector-c1tec.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sector-c2tec.section2') }}" class="nav-link {{(request()->routeIs('sector-c2tec.section2')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  Technology Page End  --}}

                    {{--  Natural Resources Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['sector-c1nat*','sector-c2nat.section2'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                NATURAL RESOURCES
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('sector-c1nat.banner') }}" class="nav-link {{(request()->routeIs('sector-c1nat.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sector-c1nat.section1') }}" class="nav-link {{(request()->routeIs('sector-c1nat.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sector-c2nat.section2') }}" class="nav-link {{(request()->routeIs('sector-c2nat.section2')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  Natural Resources Page End  --}}

                    {{--  Energy Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['sector-c1energy*','sector-c2energy.section2'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                ENERGY
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('sector-c1energy.banner') }}" class="nav-link {{(request()->routeIs('sector-c1energy.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sector-c1energy.section1') }}" class="nav-link {{(request()->routeIs('sector-c1energy.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sector-c2energy.section2') }}" class="nav-link {{(request()->routeIs('sector-c2energy.section2')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  Energy Page End  --}}

                    {{--  Textiles Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['sector-c1text*','sector-c2text.section2'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                TEXTILES
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('sector-c1text.banner') }}" class="nav-link {{(request()->routeIs('sector-c1text.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sector-c1text.section1') }}" class="nav-link {{(request()->routeIs('sector-c1text.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sector-c2text.section2') }}" class="nav-link {{(request()->routeIs('sector-c2text.section2')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  Textiles Page End  --}}

                    {{--  Advocacy Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['advocacy.banner','advocacy.section1','advocacyCSection.create','advocacyCSection.index','advocacyCSection.edit'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                ADVOCACY
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('advocacy.banner') }}" class="nav-link {{(request()->routeIs('advocacy.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('advocacy.section1') }}" class="nav-link {{(request()->routeIs('advocacy.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('advocacyCSection.index') }}" class="nav-link {{ request()->routeIs('advocacyCSection.index','advocacyCSection.create','advocacyCSection.edit') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  Advocacy Page End  --}}

                    {{--  Small Businesses Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['smallBusiness.banner'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                SMALL BUSINESS
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('smallBusiness.banner') }}" class="nav-link {{(request()->routeIs('smallBusiness.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 4</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 5</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 6</p>
                                </a>
                            </li> --}}
                        </ul>
                    </li>
                    {{--  Small Businesses Page End  --}}

                    {{--  women Advocacy Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['womenAdvocacy-banner'.'advocacyWomenSection.index','advocacyWomenSection.create'.'advocacyWomenSection.edit','advocacyWomenSection*'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                WOMEN ADVOCACY
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('womenAdvocacy-banner') }}" class="nav-link {{(request()->routeIs('womenAdvocacy-banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                             {{-- <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li> --}}
                            <li class="nav-item">
                            <a href="{{ route('advocacyWomenSection.index') }}" class="nav-link {{ request()->routeIs('advocacyWomenSection.index','advocacyWomenSection.create','advocacyWomenSection.edit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Section 2</p>
                            </a>
                        </li>
                            {{--<li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 4</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 5</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 6</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 7</p>
                                </a>
                            </li> --}}
                        </ul>
                    </li>
                    {{--  women Advocacy Page End  --}}

                    {{--  VETERANS Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['veterans-banner'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                VETERANS ADVOCACY
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('veterans-banner') }}" class="nav-link {{(request()->routeIs('veterans-banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 4</p>
                                </a>
                            </li> --}}
                        </ul>
                    </li>
                    {{--  VETERANS Page End  --}}

                    {{--  SUPPORT SERVICES Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['supportServices-banner','advocacySSCSection*'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                SUPPORT SERVICES
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('supportServices-banner') }}" class="nav-link {{(request()->routeIs('supportServices-banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="{{ route('advocacySSCSection.index') }}" class="nav-link {{(request()->routeIs('advocacySSCSection.index','advocacySSCSection.create','advocacySSCSection.edit')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 4</p>
                                </a>
                            </li> --}}
                        </ul>
                    </li>
                    {{--  SUPPORT SERVICES Page End  --}}

                    {{--  EVENTS Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['myEvent.banner','myEvent.section1','myEvent.section3','our-event.index'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                EVENTS
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('myEvent.banner') }}" class="nav-link {{(request()->routeIs('myEvent.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('myEvent.section1') }}" class="nav-link {{(request()->routeIs('myEvent.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('our-event.index') }}" class="nav-link {{(request()->routeIs('our-event.index')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('myEvent.section3') }}" class="nav-link {{(request()->routeIs('myEvent.section3')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  EVENTS Page End  --}}

                    {{--  EVENT CALENDAR Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['event-calender.banner','event-calender*'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                EVENT CALENDAR
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('event-calender.banner') }}" class="nav-link {{(request()->routeIs('event-calender.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('event-calender.index') }}" class="nav-link {{(request()->routeIs('event-calender.index','event-calender.create','event-calender.edit','event-calender.udpate')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Events</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  EVENT CALENDAR Page End  --}}

                    {{--  EVENT REQUEST Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                EVENT REQUEST
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  EVENT REQUEST Page End  --}}

                    {{--  INTERNATIONAL EVENTS Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                INTERNATIONAL EVENTS
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 4</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 5</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  INTERNATIONAL EVENTS Page End  --}}

                    {{--  BLOG Page Start  --}}
                    <li class="nav-item {{(request()->routeIs(['myBlog.banner','my-blog*'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                BLOG
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('myBlog.banner') }}" class="nav-link {{(request()->routeIs('myBlog.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('my-blog.index') }}" class="nav-link {{(request()->routeIs('my-blog*')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blog</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  BLOG Page End  --}}


                    {{-- widgets section start  --}}
                    <li class="nav-item {{(request()->routeIs(['joinWidget*','eventWidget*'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                WIDGETS
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('joinWidget') }}" class="nav-link {{(request()->routeIs('joinWidget')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Join Widget</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('eventWidget') }}" class="nav-link {{(request()->routeIs('eventWidget*')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Event Widget</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- widgets section end  --}}



                    {{--  FINANCIAL Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                FINANCIAL
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 4</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  FINANCIAL Page End  --}}

                    {{--  GRANTS Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                GRANTS
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  GRANTS Page End  --}}

                    {{--  FUNDING Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                FUNDING
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  FUNDING Page End  --}}

                    {{--  PARTNERS SPONSORS Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                PARTNERS SPONSORS
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  PARTNERS SPONSORS Page End  --}}

                    {{--  BECOME A PARTNER Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                ECOME A PARTNER
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 4</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 5</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  BECOME A PARTNER Page End  --}}

                    {{--  BECOME A SPONSOR Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                BECOME A SPONSOR
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 4</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  BECOME A SPONSOR Page End  --}}

                    {{--  OUTREACH Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                OUTREACH
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 4</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  OUTREACH Page End  --}}


                    {{--  CHAD Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                CHAD
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  CHAD Page End  --}}

                    {{--  GHANA Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                GHANA
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  GHANA Page End  --}}

                    {{--  SOUTH AFRICA Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                SOUTH AFRICA
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  SOUTH AFRICA Page End  --}}

                    {{--  ZIMBABWE Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                ZIMBABWE
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  ZIMBABWE Page End  --}}

                    {{--  CAMEROON Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                CAMEROON
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  CAMEROON Page End  --}}

                    {{--  DRC Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                DRC
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  DRC Page End  --}}

                    {{--  COTE D'IVOIRE Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                COTE D&apos;IVOIRE
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  COTE D'IVOIRE Page End  --}}

                    {{--  USA Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                USA
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  USA Page End  --}}

                    {{--  OPPORTUNITIES Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                OPPORTUNITIES
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  OPPORTUNITIES Page End  --}}

                    {{--  AGRICULTURE Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                AGRICULTURE
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  AGRICULTURE Page End  --}}

                    {{--  CONSTRUCTION Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                CONSTRUCTION
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  CONSTRUCTION Page End  --}}

                    {{--  MINING Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                MINING
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  MINING Page End  --}}

                    {{--  RFX Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                RFX
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  RFX Page End  --}}

                    {{--  CAREERS Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                CAREERS
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  CAREERS Page End  --}}

                    {{--  JOB OPENINGS Page Start  --}}
                    {{-- <li class="nav-item {{(request()->routeIs(['aboutUs.banner','aboutUs.section1','aboutUs.section2','aboutUs.section3'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                JOB OPENINGS
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.banner') }}" class="nav-link {{(request()->routeIs('aboutUs.banner')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs.section1') }}" class="nav-link {{(request()->routeIs('aboutUs.section1')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section 3</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{--  JOB OPENINGS Page End  --}}

                    {{-- <li class="nav-item {{(request()->routeIs(['admin.menus'])) ? 'menu-is-opening menu-open' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-palette"></i>
                            <p>
                                Apperence
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{ route('admin.menus') }}" class="nav-link {{(request()->routeIs('admin.menus')) ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Menus</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Footer</p>
                                </a>
                            </li>

                        </ul>
                    </li> --}}

                    <li class="nav-item">
                        <a href="{{ route('admin.sociallinks') }}" class="nav-link {{(request()->routeIs('admin.sociallinks')) ? 'active' :''}}">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                SOCIAL LINKS
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.setting') }}" class="nav-link {{(request()->routeIs('admin.setting')) ? 'active' :''}}">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                SETTING
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
