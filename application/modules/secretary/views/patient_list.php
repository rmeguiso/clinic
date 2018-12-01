

  <section class="content-header">
   <h1>Patients</h1>

   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Patients</a></li>

    <li class="active">Search Patient</li>
  </ol>

</section>

<!-- Main content -->
<section class="content">


  <div class="box box-default color-palette-box">

    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-users"></i> All Patients</h3>

      <div class="box-tools">
        <form id="search_form">
          <div class="input-group input-group-sm" style="width: 250px; right: 30px;">

            <input type="text" name="table_search" id="search_field" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default" id="search_button"><i class="fa fa-search"></i></button>
            </div>
          </form>
        </div>
      </div>

    </div>



    <div class="box-body" >

     <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Patient</th>
          <th scope="col">Birthday</th>
          <th scope="col">Gender</th>
          <th scope="col">Address</th>
          <th scope="col" class="text-center">Add to queue</th>
        </tr>
      </thead>

      

      
      <tbody>
        <?php foreach ($patients as $patient): ?>
          <tr>
            <td>
              <p id="patient_id" class="text-secondary"><?php echo $patient['ID']; ?></p>

            </td>
            <td>
              <img style="width: 50px;" class="img-circle img-bordered-sm" src="<?php echo empty($patient['Image']) ? base_url().'assets/img/no-image.png' :  $patient['Image'];?>" alt="user image">
              <strong>
                <a id="<?php echo $patient['ID']; ?>" class="patient_profile" href="http://google.com"  ><?php echo $patient['FName'] . ' ' . $patient['LName'] ; ?></a>
              </strong>

            </td>
            <td> 
              <p class="text-secondary"><?php echo $patient['Bday']; ?></p>
            </td>
            <td> 
              <p class="text-secondary"><?php echo $patient['Gender']; ?></p>
            </td>
            <td> 
              <p class="text-secondary"><?php echo $patient['Address']; ?></p>
            </td>
            <td class="text-center"> <button id="<?php echo $patient['ID']; ?>" class="btn btn-info queue_button" data-target=".bd-example-modal-sm" data-toggle="modal" ><i class="fa fa-arrow-circle-right"></i></button>

             </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    

    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal_header">Add to queue</h5>
            <button type="button" id="modal_close_button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="form-group">
              <label for="comment">Remarks:</label>
              <input type="hidden" name="hidden_patient_id" id="hidden_patient_id" value="">
              <textarea class="form-control" rows="5" id="remarks"></textarea>
            </div>
          </div>

          <div class="modal-footer">          
            <button id="add_to_queue_button"  type="button" class="btn btn-primary">Add</button>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>


</section>





<script type="text/javascript">

  $('document').ready(function(){

    $(".patient_profile").on('click', function(e) {
      event.preventDefault();
      // pass the id of patient to our modal form
    $("#hidden_patient_id").val(this.id);

      var patient_id = $("#hidden_patient_id").val();
     
      $.get( baseUrl + "patient/profile/"+patient_id)
    .done(function( data ) {
      $('.content-wrapper').html(data);
    });
  });  

   $(".queue_button").on('click', function() {
    $("#hidden_patient_id").val(this.id);
  });  


   $('#add_to_queue_button').on('click', function() {
    var patient_id = $("#hidden_patient_id").val();
    var remarks = $("#remarks").val();
    
    
    $.post( "secretary/add_to_queue", { patient_id: patient_id, remarks: remarks })
    .done(function( data ) {
     $("#modal_close_button").click()
   });

  });


   $('#search_form').on('submit', function(e) {

    e.preventDefault();
    var search_field = $("#search_field").val();


    $.post( "secretary/search_for_patient", { search_field: search_field })
    .done(function( data ) {
      $('.box-body').html(data);
    });


    

     


  });

 });

</script>


