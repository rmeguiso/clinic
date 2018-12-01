
  <section class="content-header">
   <h1>Patients Medicine</h1>

   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Patients Medicine</a></li>

    <li class="active">Patients medicine List</li>
  </ol>

</section>

<!-- Main content -->
<section class="content">


  <div class="box box-default color-palette-box">

    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-users"></i> All Patients Medicine List</h3>

      <div class="box-tools">
        <div class="input-group input-group-sm" style="width: 250px; right: 30px;">

          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>

    </div>



    <div class="box-body">

     <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Patient</th>
          <th scope="col">Medicine</th>
          <th scope="col">Prescription</th>
          <th scope="col">Status</th>
        </tr>
      </thead>

      

      
      <tbody>
        <?php foreach ($medicines as $medicine): ?>
          <tr>
            <td>
              <p id="medicine_id" class="text-secondary"><?php echo $medicine['ID']; ?></p>

            </td>
            <td>
              <img style="width: 50px;" class="img-circle img-bordered-sm" src="<?php echo empty($medicine['Image']) ? "https://image.shutterstock.com/image-vector/photo-coming-soon-symbol-450w-345348836.jpg" :  $doctor['Image'];?>" alt="user image">
              <strong>
                <a href="#"><?php echo $medicine['FName'] . ' ' . $medicine['LName'] ; ?></a>
              </strong>
            </td>
            <td> 
              <p class="text-secondary"><?php echo $medicine['Med_ID']; ?></p>
            </td>
            <td> 
              <p class="text-secondary"><?php echo $medicine['Prescription']; ?></p>
            </td>
            <td> 
              <p class="text-secondary"><?php echo $medicine['Status']; ?></p>
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
              <input type="hidden" name="hidden_doctor_id" id="hidden_doctor_id" value="">
              <textarea class="form-control" rows="5" id="remarks"></textarea>
            </div>
          </div>

          <div class="modal-footer">          
            <button id="add_to_queue2_button"  type="button" class="btn btn-primary">Add</button>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>


</section>





