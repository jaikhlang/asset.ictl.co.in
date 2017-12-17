
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ASSET 2018 Successful Registered Application</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
    * a{
      text-decoration: none;
    }
    body{
      margin: 0 auto;
      //background: #eee;
    }

    section{
      max-width: 800px;
      margin: auto;
      margin-top: 4rem;
      margin-bottom: 4rem;
      overflow: hidden;
      border: 1px solid #eee;
      background: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, .15);

    }
    .invoice-box {
      padding: 30px;
      font-size: 16px;
      line-height: 24px;
      font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
      color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .title{
      color: red;
    }
    span{
      color: teal;
    }
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table{
        text-align: right;
      }


    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    .asset-info{
        font-family: sans-serif;
        background-color: #efebe9;
        margin: 0;
        overflow: hidden;
        padding: 2rem;
    }
    .asset-info .fa{
      color: red;
    }
    </style>
</head>

<body>
  <section id="greywhite">
    <div class="invoice-box">

        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td >

                                <h2 class="title">ASSET 2018</h2>
                                <span>National Conference on Applied Sciences, Sustainable & Evolving Technologies</span><br>
                                <span>63<sup>rd</sup> Annual Technical Session of Assam Science Society, 2018</span>
                            </td>

                            <td>
                                #0{{ $payment->id }}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Jointly Organised By<br>
                                <strong>CIT Kokrajhar BTAD Assam<br> &amp;
                                Bodoland University Assam<br>
                                <span><a href="{{ url('/') }}">www.conferenceasset.com</a></span></strong>
                            </td>

                            <td>&nbsp;<br>
                                <img src="{{ asset('uploads/img/' . $payment->user->image) }}" style="width: 72px;" alt="">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


            <tr class="heading">
                <td>
                    Registration Details
                </td>

                <td>
                    &nbsp;
                </td>
            </tr>

            <tr class="item">
                <td>Delegate Name</td>
                <td>{{ $payment->user->name }}</td>
            </tr>
            <tr class="item">
                <td>Designation</td>
                <td>{{ $payment->user->designation }}</td>
            </tr>
            <tr class="item">
                <td>Institute/Organisation</td>
                <td>{{ $payment->user->organisation }}</td>
            </tr>
            <tr class="item">
                <td>Address</td>
                <td>{{ $payment->user->address }} {{ $payment->user->pin }}</td>
            </tr>
            <tr class="item">
                <td>Email</td>
                <td>{{ $payment->user->email }}</td>
            </tr>
            <tr class="item">
                <td>Phone</td>
                <td>{{ $payment->user->phone }}</td>
            </tr>
            <tr class="item">
                <td>Registration Category</td>
                <td>ASSET 2018 Registration ({{ $payment->user->category }})</td>
            </tr>

            <tr class="item">
                <td>
                    Payment ID
                </td>

                <td>
                    #{{ $payment->payment_id }}
                </td>
            </tr>


            <tr class="item">
                <td>
                    Registration Fee
                </td>

                <td>
                    {{ $payment->amount }} INR
                </td>
            </tr>

            <tr class="item last">
                <td>Registered On</td>
                <td>{{ $payment->created_at }}</td>
            </tr>
            <tr class="item">
                <td>Paper Title</td>
                <td>
                  @if(!empty($payment->user->paper))
                    {{ $payment->user->paper }}
                  @else
                    -
                  @endif
                </td>
            </tr>
        </table>



    </div>
    <div class="asset-info">
      <h2><small style="color: grey">CONFERENCE DATE</small><br><strong>9TH, 10TH &amp; 11TH JANUARY 2018</strong></h2>
      <hr>
      <p><span class="fa fa-heart"></span> Thank You! <span style="float: right; color: grey; font-size: 13px;">&copy;  <a style="text-decoration: none;" class="right" href="{{ url('/') }}">conferenceasset.com</a></span></p>
    </div>
  </section>
</body>
</html>
