<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('home/images/app-logo.png') }}" alt="logo" style="width: 4rem;"><b>UPASHSA</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">Home </a>
          </li>
          <li class="nav-item dropdown @@pages">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">About
              <span><i class="ti-angle-down"></i></span>
            </a>
            <!-- Dropdown list -->
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('aboutUPASHSA') }}">About UPASHSA</a></li>
              <li><a class="dropdown-item" href="{{ route('aimsObjectives') }}">Aims & Objectives</a></li>
              <li><a class="dropdown-item" href="{{ route('constituentsUPASHSA') }}">Constituents of UPASHSA</a></li>
              <li><a class="dropdown-item" href="{{ route('associationMember') }}">Member of Association</a></li>
            </ul>
          </li>
          {{-- <li class="nav-item @@about">
            <a class="nav-link" href="about.html">About</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contactUs') }}">Contact</a>
          </li>
        </ul>
        <a class="btn btn-main-md" href="{{ route('signIn') }}">LOGIN</a>
      </div>
    </div>
  </nav>
