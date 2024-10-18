<!-- Navbar Light -->
<nav
    class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3">
    <div class="container">
        <a class="navbar-brand" href="" rel="tooltip" title="Designed and Coded by Creative Tim"
           data-placement="bottom">
            <img src="{{ asset('svg/logo-no-background.svg') }}" height="50rem" class="mx-0">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="nav-item px-lg-5">
                    <x-navbar-links href="/home" :active="request()->is('home') || request()->is('kemahasiswaan') || request()->is('keasramaan') || request()->is('kantin')">Home</x-navbar-links>
                </li>
                <li class="nav-item px-lg-5">
                    <x-navbar-links href="/report" :active="request()->is('report')">Report</x-navbar-links>
                </li>
                <li class="nav-item px-lg-5">
                    <x-navbar-links href="/history" :active="request()->is('history')">History</x-navbar-links>
                </li>
                <li class="nav-item px-lg-5">
                    <a href="{{ route('logout') }}" class="nav-link text-secondary fw-bolder">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
