<div class="">
  <nav id="nav" class="z-depth-0 white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="{{ url('/') }}" class="brand-logo white-text"><img class="hide-on-small-only" style="margin-right: .5rem;" src="{{ asset('image/logo.png') }}" alt="">
        <span class="brand-text light text-darken-1">asset<small>2018</small></span></a>
      <ul id="nav-links" class="right hide-on-med-and-down">
        <li><a class="grey-text text-darken-1 {{ Request::is('/') ? "active" : ""}}" href="{{ url('/') }}">
          Home</a></li>
        <li><a class="grey-text text-darken-1 {{ Request::is(route('pages.paper')) ? "active" : ""}}" href="{{ route('pages.paper') }}">
          Call for Paper</a></li>
        <li><a class="grey-text text-darken-1 {{ Request::is(route('events.registration')) ? "active" : ""}}" href="{{ route('events.registration') }}">
          Registration</a></li>
        <li><a class="grey-text text-darken-1 {{ Request::is(route('events.committee')) ? "active" : ""}}" href="{{ route('events.committee') }}">
          Committee</a></li>
        <li><a class="grey-text text-darken-1 {{ Request::is(route('abouts.contact')) ? "active" : ""}}" href="{{ route('abouts.contact') }}">
          Contact</a></li>
        <li><a class="grey-text text-darken-1 {{ Request::is(route('events.sponsor')) ? "active" : ""}}" href="{{ route('events.sponsor') }}">
          Sponsorship</a></li>
      @guest
        <li><a class="urse-sign-text grey-text text-darken-1" href="{{ route('login') }}">Login</a></li>
        <li><a class="urse-sign-text grey-text text-darken-1" href="{{ route('register') }}">Register</a></li>
      @else
        <li id="userDropList">
          <a class="grey-text text-darken-1 navbar-user-dropdown" href="#!" data-activates="userdropdown">
            <i class="fa fa-2x fa-user-circle-o"></i> </a>
        </li>
      @endguest
      </ul>

      <!-- Dropdown Structure -->
      <ul id="userdropdown" class="dropdown-content">
        <li><a href="#!">Conference Registration</a></li>
        <li class="divider"></li>
        <li><a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      </li>
      </ul>

      <ul id="nav-mobile" class="side-nav blue">
        <li><a class="white-text text-darken-1 {{ Request::is('/') ? "active" : ""}}" href="{{ url('/') }}">
          Home</a></li>
        <li><a class="white-text text-darken-1 {{ Request::is(route('pages.paper')) ? "active" : ""}}" href="{{ route('pages.paper') }}">
          Call for Paper</a></li>
        <li><a class="white-text text-darken-1 {{ Request::is(route('events.registration')) ? "active" : ""}}" href="{{ route('events.registration') }}">
          Registration</a></li>
        <li><a class="white-text text-darken-1 {{ Request::is(route('events.committee')) ? "active" : ""}}" href="{{ route('events.committee') }}">
          Committee</a></li>
        <li><a class="white-text text-darken-1 {{ Request::is(route('abouts.contact')) ? "active" : ""}}" href="{{ route('abouts.contact') }}">
          Contact</a></li>
        <li><a class="white-text text-darken-1 {{ Request::is(route('events.sponsor')) ? "active" : ""}}" href="{{ route('events.sponsor') }}">
          Sponsorship</a></li>

          @guest
            <li><a class="urse-sign-text white-text text-darken-1" href="{{ route('login') }}">Login</a></li>
            <li><a class="urse-sign-text white-text text-darken-1" href="{{ route('register') }}">Register</a></li>
          @else
            <li><a class="urse-sign-text white-text text-darken-1"><i class="fa fa-user-circle-o white-text" style="padding: 0!important; margin:0!important;"></i> {{ Auth::user()->name }}</a></li>
            <li><a class="urse-sign-text white-text text-darken-1" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          @endguest
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse teal-text"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>
<div class="clearfix"></div>
