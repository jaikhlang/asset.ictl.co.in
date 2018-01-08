@extends('layouts.app')

@section('title', 'Submission Success')
@section('stylesheets')

@endsection

@section('content')
<section class="blue lighten-5" style="overflow: hidden;">
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="" style="padding: 60px 0px;">
                      @include('layouts._includes._message')
                      <div class="divider"></div>

                      <div class="" style="padding: 1.5rem 0;">
                        <span>Paper on acceptance, notification mail will be sent your email.</span>
                      </div>

                      <div class="card-panel">
                        <span>
                          <h5>Proceed to registration</h5>
                          <span><a href="{{ route('events.registration') }}" class="btn wave wave-light red">Register Online Now</a></span>
                        </span>
                        <div style="margin-top: 2rem;">
                          Or for offline registration download   <a class="" href="{{ asset('uploads/RegistrationForm.docx') }}">(Offline Register Form)</a>.
                          <p>
                            1. Fill in all the details required and affix passport size photograph.<br>
                            2. (D/D, Cheque should be made in favour of APPLIED SCIENCES SUST AND EVOLV TECH,<br/>
                             Account number: 37365772593 (IFSC CODE: SBIN0007379) payable at State Bank of India, Kokrajhar, Assam)<br>
                            3. Send filled in registration form to <span class="chip">asset.2k18@gmail.com</span><br>
                            4. On successful registration,you will be notified with an email.</p>
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
  <script>
  </script>
@endsection
