
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ASSET 2018 Successful Registered Payment Invoice</title>
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
                              <img src="{{ asset('http://assamsciencesociety.org/images/ass-logo.jpg') }}" alt="">
                                <h2 class="title">ASSET 2018</h2>
                                <span>National Conference on Applied Sciences, Sustainable & Evolving Technologies</span><br>
                                <span>63<sup>rd</sup> Annual Technical Session of Assam Science Society, 2018</span>
                            </td>

                            <td>
                                Invoice #: 0{{ $payment->id }}<br>
                                Created: {{ date('d-m-Y') }} <br>
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

                            <td>
                                  <strong>{{ $payment->user->name }}<br>
                                {{ $payment->user->address }}<br>
                                {{ $payment->email }}<br>
                                {{ $payment->phone }}</strong>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


            <tr class="heading">
                <td>
                    Description
                </td>

                <td>
                    &nbsp;
                </td>
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
                    Purpose
                </td>

                <td>
                    ASSET 2018 Registration ({{ $payment->user->category }})
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
                <td>
                    Registered On
                </td>

                <td>
                    {{ $payment->created_at }}
                </td>
            </tr>



            <tr class="heading">
                <td>
                    Payment Method
                </td>

                <td>
                    Online #
                </td>
            </tr>

            <tr class="details">
                <td>
                    Amount Paid
                </td>

                <td>
                    {{ $payment->amount }} INR
                </td>
            </tr>
            <tr class="total">
                <td>

                </td>

                <td>
                    Total: {{ $payment->amount }} INR
                </td>
            </tr>
        </table>
        <hr>


    </div>
    <div class="asset-info">
      <h2><small style="color: grey">CONFERENCE DATE</small><br><strong>9TH, 10TH &amp; 11TH JANUARY 2018</strong></h2>
      <hr>
      <p><span class="fa fa-heart"></span> Thank You! <span style="float: right; color: grey; font-size: 13px;">&copy;  <a style="text-decoration: none;" class="right" href="{{ url('/') }}">conferenceasset.com</a></span></p>
    </div>
  </section>
</body>
</html>
