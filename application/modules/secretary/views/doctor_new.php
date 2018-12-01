
<section class="content-header">
  <h1>Add Doctor</h1>

 <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Doctors</a></li>

  <li class="active">Add Doctor</li>
</ol>

</section>

<!-- Main content -->
<section class="content">


  <div class="box box-default color-palette-box">

    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-user"></i> New Doctor</h3>
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
          <label for="birthday" class="col-sm-2 control-label">Specialization*</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="specialization" placeholder="Specialization">
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
         <button id="save_button_new_doctor" class="btn btn-primary">Save</button>
       </div>
     </div>


   </form>


 </div>

</section>



<script type="text/javascript">


  $('document').ready(function(){
    $('#save_button_new_doctor').on('click', function() {
     event.preventDefault();

     first_name =  $("input#first_name").val();
     last_name = $("input#last_name").val();
     specialization = $("input#specialization").val();
     
     $.ajax({
      type: "POST",
      url: baseUrl + "secretary/add_doctor",
      dataType: 'JSON',
      
      data: {
        'first_name':first_name,
        'last_name':last_name,
        'specialization':specialization,
        
      },
      complete : function( data) {
        alert("success");
      }
    });
   });


  });






</script>
