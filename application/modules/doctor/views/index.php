<?php main_header(); ?>

    <div class="content-wrapper">
        <section class="content-header">
        
        
        </section>

        <!-- Main content -->
        <section class="content">
        
        <div class="box box-solid">
        
        <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-users"></i> Patient Queue</h3>

      <div class="box-tools">
        <form id="search_form">
          <div class="input-group input-group-sm" style="width: 250px; right: 30px;">

            <input type="text" name="table_search" id="search_field" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-info" id="search_button"><i class="fa fa-search"></i></button>
            </div>
          </form>
        </div>
      </div>

    </div>


        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Patient</th>
      <th scope="col">Queue No.</th>
      <th scope="col">Remarks</th>
      <th scope="col">Checkup</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($schedule as $schedule_item): ?>
    <tr>
    <td><?php echo $schedule_item['Date']; ?></td>
    <td><img style="width: 50px;" class="img-circle img-bordered-sm" src="<?php echo empty($schedule_item['Image']) ? base_url().'assets/img/no-image.png' :  $schedule_item['Image'];?>" alt="user image"><strong>
                <a id="<?php echo $schedule_item['ID']; ?>" class="patient_profile" href="#"  ><?php echo $schedule_item['FName'] . ' ' . $schedule_item['LName'] ; ?></a>
              </strong></td>
    <td><?php echo $schedule_item['Queue_no']; ?></td>
    <td><?php echo $schedule_item['Remarks']; ?></td>
    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Checkup</button></td>    
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

              <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Patient name here</h4>
              </div>
              <div class="modal-body">
                <p>Hello&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        

           



        
        
        </section>
    <!-- /.content -->
    </div>

<?php main_footer(); ?>