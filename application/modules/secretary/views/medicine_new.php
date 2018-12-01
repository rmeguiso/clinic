
<section class="content-header">
 <h1>Medicine</h1>

 <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Medicine</a></li>

  <li class="active">Add Medicine</li>
</ol>

</section>

<!-- Main content -->
<section class="content">


  <div class="box box-default color-palette-box">

    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-user"></i> Add Medicine</h3>
    </div>

    <div class="box-body">

      <form id="add_patient_form" class="form-horizontal">

        <div class="form-group">
          <label for="medicine_name" class="col-sm-2 control-label">Medicine Name*</label>

          <div class="col-sm-5">
            <input type="text" class="form-control" id="medicine_name" placeholder="Medicine Name">
          </div>
        </div>
        
        <div class="form-group">
          <label for="birthday" class="col-sm-2 control-label">Description*</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="description" placeholder="Description">
          </div>
        </div>


        <div class="form-group">
          <label class="col-sm-2 control-label"></label>

          <div class="col-sm-5">
           <button id="save_button_new_medicine" class="btn btn-primary">Save</button>
         </div>
       </div>


     </form>


   </div>

 </section>


<script type="text/javascript">


  $('document').ready(function(){
    $('#save_button_new_medicine').on('click', function() {
     event.preventDefault();

     medicine_name =  $("input#medicine_name").val();
     description = $("input#description").val();
     
     $.post( "secretary/add_medicine", { medicine_name: medicine_name,description: description })
     .done(function( data ) {
      alert("success");
    });

   });


  });

</script>
