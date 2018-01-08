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
            <li class="tab"><a href="{{ route('create.excel')}}">Create Excel</a></li>
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
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contacts</th>
                    <th>Category</th>
                    <th>Amount & Fee</th>
                    <th>PaymentID</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; $total = 0; $fee = 0; ?>
                  @foreach ($all as $delegate)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $delegate->name }}</td>
                      <td>
                          #{{ $delegate->organisation }}<br>
                          {{ $delegate->address }}
                          {{ $delegate->pin }}</td>

                      <td>{{ $delegate->email }} <br> {{ $delegate->phone }}</td>
                      <td>{{ $delegate->category }}</td>
                      <td>{{ $delegate->pay->amount }} &nbsp; <span class="grey-text">{{ $delegate->pay->gateway_fees }}</span></td>
                      <td>
                        #{{ $delegate->payment_id }}<br>
                        {{ $delegate->pay->payment_id }}</td>
                    </tr>

                    <?php $total = $total + $delegate->pay->amount; $fee = $fee + $delegate->pay->gateway_fees;?>
                  @endforeach
                  <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>
                        Total =
                      </td>
                      <td>{{ $total }}.00 &nbsp; <span class="grey-text">{{ $fee }}.00</span></td>
                      <td><span class="red-text">{{ $total }}.00 - {{ $fee }}.00 = {{ $total-$fee }}.00</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="section" id="student">
          <div class="row">
            <div class="col s12 m12">
              <table class="table bordered highlight">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contacts</th>
                    <th>Category</th>
                    <th>PaymentID</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  @foreach ($students as $student)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $student->name }}</td>
                      <td>
                          #{{ $student->organisation }}<br>
                          {{ $student->address }}
                          {{ $student->pin }}</td>

                      <td>{{ $student->email }} <br> {{ $student->phone }}</td>
                      <td>{{ $student->category }}</td>
                      <td>
                        #{{ $student->payment_id }}<br>
                        {{ $student->pay->payment_id }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="section" id="others">
          <div class="row">
            <div class="col s12 m12">
              <table class="table bordered highlight">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contacts</th>
                    <th>Category</th>
                    <th>PaymentID</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  @foreach ($otherstudents as $other)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $other->name }}</td>
                      <td>
                          #{{ $other->organisation }}<br>
                          {{ $other->address }}
                          {{ $other->pin }}</td>

                      <td>{{ $other->email }} <br> {{ $other->phone }}</td>
                      <td>{{ $other->category }}</td>
                      <td>
                        #{{ $other->payment_id }}<br>
                        {{ $other->pay->payment_id }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="section" id="researcher">
          <div class="row">
            <div class="col s12 m12">
              <table class="table bordered highlight">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contacts</th>
                    <th>Category</th>
                    <th>PaymentID</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  @foreach ($researchers as $researcher)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $researcher->name }}</td>
                      <td>
                          #{{ $researcher->organisation }}<br>
                          {{ $researcher->address }}
                          {{ $researcher->pin }}</td>

                      <td>{{ $researcher->email }} <br> {{ $researcher->phone }}</td>
                      <td>{{ $researcher->category }}</td>
                      <td>
                        #{{ $researcher->payment_id }}<br>
                        {{ $researcher->pay->payment_id }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="section" id="academician">
          <div class="row">
            <div class="col s12 m12">
              <table class="table bordered highlight">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contacts</th>
                    <th>Category</th>
                    <th>PaymentID</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  @foreach ($academicians as $academician)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $academician->name }}</td>
                      <td>
                          #{{ $academician->organisation }}<br>
                          {{ $academician->address }}
                          {{ $academician->pin }}</td>

                      <td>{{ $academician->email }} <br> {{ $academician->phone }}</td>
                      <td>{{ $academician->category }}</td>
                      <td>
                        #{{ $academician->payment_id }}<br>
                        {{ $academician->pay->payment_id }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="section" id="corporate">
          <div class="row">
            <div class="col s12 m12">
              <table class="table bordered highlight">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contacts</th>
                    <th>Category</th>
                    <th>PaymentID</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  @foreach ($corporates as $corporate)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $corporate->name }}</td>
                      <td>
                          #{{ $corporate->organisation }}<br>
                          {{ $corporate->address }}
                          {{ $corporate->pin }}</td>

                      <td>{{ $corporate->email }} <br> {{ $corporate->phone }}</td>
                      <td>{{ $corporate->category }}</td>
                      <td>
                        #{{ $corporate->payment_id }}<br>
                        {{ $corporate->pay->payment_id }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="section" id="unpaid">
          <div class="row">
            <div class="col s12 m12">
              <table class="table bordered highlight">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contacts</th>
                    <th>Category</th>
                    <th>PaymentID</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  @foreach ($unpaids as $unpaid)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $unpaid->name }}</td>
                      <td>
                          #{{ $unpaid->organisation }}<br>
                          {{ $unpaid->address }}
                          {{ $unpaid->pin }}</td>

                      <td>{{ $unpaid->email }} <br> {{ $unpaid->phone }}</td>
                      <td>{{ $unpaid->category }}</td>
                    </tr>
                  @endforeach
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
