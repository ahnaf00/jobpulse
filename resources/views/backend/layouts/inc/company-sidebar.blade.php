<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand d-flex align-items-center m-0"
            href=" https://demos.creative-tim.com/corporate-ui-dashboard-pro/pages/dashboards/default.html "
            target="_blank">
            <img class="navbar-brand-img" src="{{ asset('assets/backend') }}/img/logo-ct.png" alt>
            <span class="font-weight-bold ms-2">JobPulse</span>
        </a>
    </div>
    <div class="px-3  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <div class=" " id="pagesExamples">
                    <ul class="nav border-start ms-4">
                        <li class="nav-item ">
                            <a class="nav-link text-white opacity-9 " href="{{ route('company-dashboard') }}">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> Dashboard </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link text-white opacity-9 " href="{{ route('job-list-page') }}">
                                <span class="sidenav-mini-icon"> W </span>
                                <span class="sidenav-normal"> Jobs </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link text-white opacity-9 " href="{{ route('plugins') }}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> Plugins </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link text-white opacity-9 " href="{{ route('company-logout') }}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> Logout </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

        </ul>
    </div>

</aside>
