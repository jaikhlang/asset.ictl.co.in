@extends('layouts.app')

@section('metatags')
  <meta name="description" content="Paper Submission, An abstract of paper not exceeding 200 words should be submitted to asset.2k18@gmail.com"/>
  <meta name="keywords" content="call for paper, paper submission, asset18, asset2018, asset, assam science society, cit, cit kokrajhar, assam, bu, bodoland university, university conference, national conference assam, Green Science and Technology for Cleaner Society"/>
@endsection

@section('title', 'Paper Submission - 63RD Annual Technical Session of Assam Science Society 2018')
@section('styles')
    <link href="{{ asset('css/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
@endsection
@section('content')
<section class="register grey lighten-3" style="overflow: hidden; padding-top: 40px;">
    <div class="container">
        <div class="row">

            <div class="col m8">
              <div class="card-panel white lighten-5 z-depth-1">
                  <h4>Paper Submission</h4>

                  <form class="" action="{{ route('paper.submit') }}" method="POST" enctype="multipart/form-data">

                    {{ method_field('POST') }}
                    {{ csrf_field() }}

                      {{--
                      <div class="input-field">
                        <label for="authorname" >Author Names <small>(Hit add button on right to add more author.)</small></label><button type="button" id="add" name="add" class="btn-floating red right"><i class="material-icons">add</i></button>
                        <br>
                          <p class="grey-text">Add your title (Mr., Miss, Mrs., Dr., Proff.) before name.</p>
                        <ul id="dynamic_field">
                          <li>
                            <input type="text" name="name[]" placeholder="Full Name" class="validate name_list" required/>

                            <span class="grey-text"> Upload Photo (240x240)px (.jpg Format). </span><br>
                            <input type="file" name="image[]" class="" required/>
                          </li>
                          <!--button type="button" name="add" id="add" class="btn">Add More</button></li!-->
                        </ul>
                      </div> --}}

                      <div class="input-field" style="margin-top: 2.5rem;">
                        <label for="authorname">Author Name</label>
                        <input type="text" name="authorname" value="" placeholder="Full Name" class="validate" required>
                      </div>

                      <div class="input-field" style="">
                        <label for="organisation" >Organisation </label>
                        <input type="text" name="organisation" placeholder="Organisation Name" id="organisation" class="validate" required/>
                      </div>

                      <!--div class="input-field">
                        <label for="country" >Country </label>
                        <input type="text" name="country" placeholder="Country eg. India" id="country" class="autocomplete validate" required/>
                      </div-->

                      <div class="input-field">
                        <label for="address" >Address </label>
                        <input type="text" name="address" placeholder="Address" id="address" class="validate" required/>
                      </div>

                      <div class="input-field">
                        <label for="email" >Email </label>
                        <input type="text" name="email" placeholder="Email" id="email" class="validate" required/>
                      </div>

                      <div class="input-field">
                        <label for="phone" >Phone </label>
                        <input type="text" name="phone" placeholder="Contact" id="phone" class="validate" required/>
                      </div>

                      <div class="input-field">
                        <label for="papertitle" >Paper Title </label>
                        <input type="text" name="papertitle" placeholder="Title of the paper." id="papertitle" class="validate" required/>
                      </div>

                      <div class="file-field input-field">
                        <div class="btn">
                          <span>Select Paper</span>
                          <input type="file" name="paper">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" placeholder="(Acceptable file types (.docx/.doc))"  type="text" required>
                        </div>
                      </div>
                      <div class="input-field" >
                        <textarea id="remarks" name="remarks" placeholder="Remarks/Message" class="materialize-textarea" class="validate"></textarea>
                        <label for="remarks">Remarks</label>
                      </div>
                      <div class="divider"></div>



                    <p>
                      <span class="white-text light"><a href="{{ route('pages.paper') }}#guides">Read Abstract Submission Guidelines</a></span><br>
                      <input type="checkbox" id="agreebtn" />
                      <label for="agreebtn">Yes!!</label>
                      I have read the submission guidelines <span class="green-text">&amp; ready to submit.</span></p>
                    <button id="agreesubmit" type="submit" name="submit" class="btn btn-large blue  waves-effect waves-blue" disabled>Submit</button>
                  </form>
              </div>
            </div>

            <div class="col s12 m4">
                  <div class=" ">
                      <h5 class="green-text">Paper Submission Through Email</h5>
                      <div class="divider"></div>
                      <p class="left-align">Paper can also be sent through an email <span class="light teal-text"> asset.2k18@gmail.com</span> in (.doc/.docx) format.</p>
                  </div>
            </div>

            <div class="col s12 m12 center">
                <p class="grey-text light"> For any difficulties/broken links/errors kindly report us at asset.2k18@gmail.com.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
  <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
  <script>
  $('#agreebtn').on('change', function(){
    $('#agreesubmit').attr("disabled", !this.checked);
  });

  $(document).ready(function() {
    $('select').material_select();
  });

  $('#remarks').val();
  $('#remarks').trigger('autoresize');

  //Dynamic Input Field
  $(document).ready(function(){
       var i=1;
       $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<li id="btn-list'+i+'"><input type="text" name="name[]" placeholder="Enter your Name" class="name_list" /><span class="grey-text"> Upload Photo (240x240)px. </span><br><input type="file" name="image[]" class="" required/><button type="button" name="remove" id="'+i+'" class="btn btn_remove">X</button></li>');
       });
       $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#btn-list'+button_id+'').remove();
       });
       $('#submit').click(function(){
            $.ajax({
                 url:"name.php",
                 method:"POST",
                 data:$('#add_name').serialize(),
                 success:function(data)
                 {
                      alert(data);
                      $('#add_name')[0].reset();
                 }
            });
       });


  //autocomplete
      $(function(){
        $.ajax({
          type: 'GET',
          url: 'https://restcountries.eu/rest/v2/all?fields=name',
          success: function(response){
            var countryArray = response;
            var dataCountry = {};
            for(var i=0; i < countryArray.length; i++){
              //console.log(countryArray[i].name);
              dataCountry[countryArray[i].name] = countryArray[i].flag;
            }
            $('input.autocomplete').autocomplete({
              data: dataCountry,
              limit: 5, // The max amount of results that can be shown at once. Default: Infinity.
            });
          }
        });
      });
  });

  </script>
@endsection
