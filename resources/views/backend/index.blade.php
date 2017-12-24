
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

      <style media="screen">
        ul li{
          list-style: none;
          display: inline;
        }
      </style>
    </head>
    <body>

      <section id="category-links" class="grey lighten-3">
        <div class="section">
          <div class="row">
            <div class="col s12 m12 center">
              <ul>
                <li><a href="" class="waves-effect waves-light btn blue">Student (BU &amp; CIT)</a></li>
                <li><a href="" class="waves-effect waves-light btn blue">Student (Others)</a></li>
                <li><a href="" class="waves-effect waves-light btn blue">Student (Researcher)</a></li>
                <li><a href="" class="waves-effect waves-light btn blue">Student (Academician)</a></li>
                <li><a href="" class="waves-effect waves-light btn blue">Student (Corporation/Industry)</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section id="backend-section">
        <div class="section">
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
                  @foreach ($delegates as $delegate)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $delegate->user->name }}</td>
                      <td>
                          #{{ $delegate->user->organisation }}<br>
                          {{ $delegate->user->address }}
                          {{ $delegate->user->pin }}</td>

                      <td>{{ $delegate->user->email }} <br> {{ $delegate->user->phone }}</td>
                      <td>{{ $delegate->user->category }}</td>
                      <td>{{ $delegate->payment_id }}</td>
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
