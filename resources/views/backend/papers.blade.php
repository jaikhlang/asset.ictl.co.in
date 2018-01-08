<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css')}}"  media="screen,projection, print"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>

    <nav class="nav-extended blue">
      <div class="nav-wrapper green">
        <a href="#" class="" style="margin-left: 1.5rem;">conferenceasset.com</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="{{ route('registered') }}" class="">Registered Delegates</a></li>
          <li class="active"><a href="{{ route('papers') }}" class="">Papers Submitted</a></li>
          @role('superadministrator|administrator')
          <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </li>
          @endrole
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li class="tab"><a class="active" href="#all">All</a></li>
          <li class="tab"><a href="#student">Student (BU & CIT)</a></li>
          <li class="tab"><a href="#others">Student (Others)</a></li>
          <li class="tab"><a href="#researcher">Researcher</a></li>
          <li class="tab"><a href="#academician">Academician</a></li>
          <li class="tab"><a href="#corporate">Corporation/Industry</a></li>
        </ul>
      </div>
      <div class="nav-content">
        <ul class="tabs tabs-transparent">
          <li class="tab"><a class="active" href="#all">All</a></li>
          <li class="tab"><a href="#student">Student (BU & CIT)</a></li>
          <li class="tab"><a href="#others">Student (Others)</a></li>
          <li class="tab"><a href="#researcher">Researcher</a></li>
          <li class="tab"><a href="#academician">Academician</a></li>
          <li class="tab"><a href="#corporate">Corporation/Industry</a></li>
          <li class="tab"><a href="#unpaid">Unpaids</a></li>
        </ul>
      </div>
    </nav>

    <section id="backend-section">
      <div class="section" id="all">
        <div class="row">
          <div class="col s12 m12">
            <table class="table bordered highlight">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Author</th>
                  <th>Address</th>
                  <th>Contacts</th>
                  <th>Paper Title</th>
                  <th>Paper</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                @foreach ($papers as $paper)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $paper->paper_author }}</td>
                    <td>
                        #{{ $paper->author_organisation }}<br>
                        {{ $paper->author_address }}
                    </td>
                    <td>{{ $paper->author_email }} <br> {{ $paper->author_phone }}</td>
                    <td>{{ $paper->paper_title }}</td>
                    <td><a href="{{ asset('uploads/papers/' . $paper->file_name) }}" class="">{{ $paper->file_name }}</a></td>
                  </tr>
                @endforeach
                <tr>
                  <td><a href="{{ route('create.excel.submitted') }}" class="">Create Excel Sheet</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </section>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
  </body>
</html>
