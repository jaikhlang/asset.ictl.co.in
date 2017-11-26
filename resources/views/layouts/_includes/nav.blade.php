<div class="navbar-fixed">
  <nav id="nav" class="z-depth-0 white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="{{ url('/') }}" class="brand-logo white-text"><img class="hide-on-small-only" style="margin-right: .5rem;" src="{{ asset('image/logo.png') }}" alt="">
        <span class="brand-text light text-darken-1">asset<small>2018</small></span></a>
      <ul id="nav-links" class="right hide-on-med-and-down">
        <li><a class="grey-text text-darken-1 {{ Request::is('/') ? "active" : ""}}" href="{{ url('/') }}">Home</a></li>
        <li><a class="grey-text text-darken-1 {{ Request::is(route('pages.paper')) ? "active" : ""}}" href="{{ route('pages.paper') }}">Call for Paper</a></li>
        <li><a class="grey-text text-darken-1 {{ Request::is('conservation-history-of-mnp') ? "active" : ""}}" href="{{ url('/conservation-history-of-mnp') }}">Registration</a></li>
        <li><a class="grey-text text-darken-1 {{ Request::is('maozigendri-activities') ? "active" : ""}}" href="{{ url('/maozigendri-activities') }}">Committee</a></li>
        <li><a class="grey-text text-darken-1 {{ Request::is('maozigendri-aims-and-objectives-achievements') ? "active" : ""}}" href="{{ url('/maozigendri-aims-and-objectives-achievements') }}">Contact</a></li>
        <li><a class="grey-text text-darken-1 {{ Request::is('contact') ? "active" : ""}}" href="{{ url('/contact') }}">Sponsorship</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav blue">
        <li><a class="grey-text text-darken-1 {{ Request::is('/') ? "active" : ""}}" href="{{ url('/') }}">Home</a></li>
        <li><a class="grey-text text-darken-1 {{ Request::is('manas-national-park') ? "active" : ""}}" href="{{ url('/manas-national-park') }}">Manas</a></li>
        <li><a class="grey-text text-darken-1 {{ Request::is('conservation-history-of-mnp') ? "active" : ""}}" href="{{ url('/conservation-history-of-mnp') }}">Manas Conservation</a></li>
        <li><a class="grey-text text-darken-1 {{ Request::is('maozigendri-activities') ? "active" : ""}}" href="{{ url('/maozigendri-activities') }}">Activities</a></li>
        <li><a class="grey-text text-darken-1 {{ Request::is('maozigendri-aims-and-objectives-achievements') ? "active" : ""}}" href="{{ url('/maozigendri-aims-and-objectives-achievements') }}">Achievements</a></li>
        <li><a class="grey-text text-darken-1 {{ Request::is('contact') ? "active" : ""}}" href="{{ url('/contact') }}">Contact</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>
