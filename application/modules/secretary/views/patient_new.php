

<section class="content-header">
 <h1>Patients</h1>

 <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Patients</a></li>

  <li class="active">Add Patient</li>
</ol>
</section>


<section class="content">


  <div class="box box-solid color-palette-box">

    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-user"></i> New Patient</h3>
    </div>

    <div class="box-body">

      <form id="add_patient_form" class="form-horizontal">

        <div class="form-group">
          <label for="first_name" class="col-sm-2 control-label">First Name*</label>

          <div class="col-sm-5">
            <input type="text" class="form-control" id="first_name" placeholder="First Name">
          </div>
        </div>

        <div class="form-group">
          <label for="last_name" class="col-sm-2 control-label">Last Name*</label>

          <div class="col-sm-5">
            <input type="text" class="form-control" id="last_name" placeholder="Last Name">
          </div>
        </div>

        
        <div class="form-group">
          <label for="birthday" class="col-sm-2 control-label">Date of Birth*</label>
          <div class="col-sm-5">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
              </div>
              <input type="text" class="form-control pull-right" id="birthday" placeholder="mm/dd/yyyy">
            </div>

          </div>

        </div>


        <div class="form-group">
          <label for="gender" class="col-sm-2 control-label">Gender*</label>
          <div class="col-sm-5">
            <label class="radio-inline"><input type="radio" name="gender_radio" value="Male">Male</label>
            <label class="radio-inline"><input type="radio" name="gender_radio" value="Female">Female</label>
          </div>

        </div>


        <div class="form-group">
          <label for="address" class="col-sm-2 control-label">Address*</label>

          <div class="col-sm-5">
            <input type="text" class="form-control" id="address" placeholder="Address">
          </div>
        </div>


        <div class="form-group">
          <label for="civil_staus" class="col-sm-2 control-label">Civil Status*</label>
          <div class="col-sm-5">
            <label class="radio-inline"><input type="radio" name="civil_radio" value="Single">Single</label>
            <label class="radio-inline"><input type="radio" name="civil_radio" value="Married">Married</label>
            <label class="radio-inline"><input type="radio" name="civil_radio" value="Widowed">Widowed</label>
          </div>
        </div>

        <div class="form-group">
          <label for="photo" class="col-sm-2 control-label">Photo</label>
          <div class="col-sm-5">
           <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-5">
          <h6>All fields marked with asterisk(*) are required.</h6>
        </div>
      </div>



      <div class="form-group">
        <label class="col-sm-2 control-label"></label>

        <div class="col-sm-5">
         <button id="save_button_new_patient" class="btn btn-primary">Save</button>
       </div>
     </div>


   </form>

<span id="message" class="h2">Success! New Patient has been added.</span>

 </div>
</section>





<script type="text/javascript">


  $('document').ready(function(){
    $('#message').hide();
    $('#save_button_new_patient').on('click', function() {
     event.preventDefault();

     first_name =  $("input#first_name").val();
     last_name = $("input#last_name").val();
     birthday = $("input#birthday").val();
     gender =  $('input[name=gender_radio]:checked').val();
     address = $("input#address").val();
     civil_status = $('input[name=civil_radio]:checked').val();

     $.ajax({
      type: "POST",
      url: baseUrl + "secretary/add_patient",
      dataType: 'JSON',
      
      data: {
        'first_name':first_name,
        'last_name':last_name,
        'birthday':birthday,
        'gender': gender,
        'address':address,
        'civil_status':civil_status
      },
      complete : function( data) {
       $("input#first_name").val('');
       $("input#last_name").val('');
       $("input#birthday").val('');
       $("input#address").val('');
       $('input[name=gender_radio]:checked').prop('checked', false);
       $('input[name=civil_radio]:checked').prop('checked', false);
       $('.success').fadeIn(100).show();
       
       $('#message').fadeIn(function() {
        window.setTimeout(function() {
          $('#message').fadeOut('slow');
        }, 2000);
      });

      }
    });
   });
  });


  $('#birthday').datepicker({
    autoclose: true
  })



</script>
