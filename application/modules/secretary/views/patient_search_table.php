 <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">result</th>
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
        <img style="width: 50px;" class="img-circle img-bordered-sm" src="<?php echo empty($patient['Image']) ? "https://image.shutterstock.com/image-vector/photo-coming-soon-symbol-450w-345348836.jpg" :  $patient['Image'];?>" alt="user image">
        <strong>
          <a id="<?php echo $patient['ID']; ?>" class="patient_profile" href="#"><?php echo $patient['FName'] . ' ' . $patient['LName'] ; ?></a>
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
      <td class="text-center"> 
       <button id="<?php echo $patient['ID']; ?>" class="btn btn-info queue_button" data-target=".bd-example-modal-sm" data-toggle="modal">
        <i class="fa fa-arrow-circle-right"></i>
      </button>
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


<script type="text/javascript">
  $('document').ready(function(){

    $(".patient_profile").on('click', function(e) {
      event.preventDefault();
      
      
      var patient_id = this.id;
     
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
    
    $.post( "secretary/add_to_queue", { patient_id: patient_id,remarks: remarks })
    .done(function( data ) {
      $('#modal_close_button').click();
    });


  });
 });
</script>









