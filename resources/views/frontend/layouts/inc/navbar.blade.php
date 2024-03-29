
<!-- Navbar Dark -->

<nav
  class="navbar navbar-expand-lg navbar-dark bg-dark z-index-3 py-3">
  <div class="container">
    <a class="navbar-brand text-white" href="https://demos.creative-tim.com/now-ui-design-system-pro/presentation.html" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
      JobPulse
    </a>
    <a href="https://www.creative-tim.com/product/now-ui-design-system-pro#pricingCard" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 ms-auto d-lg-none d-block">Buy Now</a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
      <ul class="navbar-nav navbar-nav-hover mx-auto">
        <li class="nav-item mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" role="button">
            Home
            <img src="{{ asset('assets/frontend') }}/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-1">
          </a>
        </li>

        <li class="nav-item mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" role="button">
            About
            <img src="{{ asset('assets/frontend') }}/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-1">
          </a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" role="button">
            Jobs
            <img src="{{ asset('assets/frontend') }}/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-1">
          </a>
        </li>

        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" role="button">
            Contact
            <img src="{{ asset('assets/frontend') }}/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-1">
          </a>
        </li>
      </ul>

      <ul class="navbar-nav d-lg-block d-none">
        <li class="nav-item">
          <a href="https://www.creative-tim.com/product/now-ui-design-system-pro#pricingCard" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1" role="button">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
