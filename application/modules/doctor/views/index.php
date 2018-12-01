<style type="text/css">
  .active{
    background-color: cadetblue;
  }
</style>
<?php main_header(); ?>
<?php sidebar('dashboard','',''); ?>

    <div class="content-wrapper">
        <section class="content-header">
        
        
        </section>

        <!-- Main content -->
        <section class="content">
        
        <h1><?php echo $title; ?></h1>


        <table class="table table-dark">
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
    <td><?php echo $schedule_item['Patient_ID']; ?></td>
    <td><?php echo $schedule_item['Queue_no']; ?></td>
    <td><?php echo $schedule_item['Remarks']; ?></td>
    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Checkup</button></td>    
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


 


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