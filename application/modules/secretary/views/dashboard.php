
<section class="content-header">
  <h1>Dashboard</h1>

  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard active"></i>Dashboard</a></li>
  </ol>
</section>


<section class="content">

  <div class="row mb-5">

    <div class="col-lg">
      <div class="box box-solid text-center">
        <div class="box-body">
          <h4>₱124,365.76</h4>
          <p>Gross Revenue</p>
        </div>
      </div>
    </div>

    <div class="col-lg">
      <div class="box box-solid text-center">

        <div class="box-body">
          <h4> <?php echo $total_patients;?></h4>
          <p>Total Patients </p>
        </div>
      </div>
    </div>

    <div class="col-lg">
      <div class="box box-solid text-center">

        <div class="box-body">
          <h4> <?php echo $total_doctors;?></h4>
          <p>Total Doctors </p>
        </div>
      </div>
    </div>

    <div class="col-lg">
      <div class="box box-solid text-center">

        <div class="box-body">
          <h4> 51</h4>
          <p>Total Laboratories </p>
        </div>
      </div>
    </div>

    
  </div>


  


  <div class="row">
    <div class="col-lg-8">
      <div class="box box-solid color-palette-box">

        <div class="box-header with-border">
          <h3 class="box-title">Queue</h3>
        </div>

        <div class="box-body">
         <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Patient</th>
              <th scope="col">Date</th>
              <th scope="col">Remarks</th>
              <th class="text-center" scope="col">Action</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($patients as $patient): ?>
              <tr>
                <td><?php echo $patient['Queue_no']; ?></td>

                <td><img style="width: 50px;" class="img-circle img-bordered-sm" src="<?php echo empty($patient['Image']) ? base_url().'assets/img/no-image.png' :  $patient['Image'];?>" alt="user image">
                  <strong><a id="patient/profile/<?php echo $patient['Patient_ID']; ?>" class="profile_links" href="#patient/profile/<?php echo $patient['Patient_ID']; ?>"><?php echo $patient['FName'] . ' ' . $patient['LName'] ; ?></a></strong></td>

                  <td><?php echo $patient['Date']; ?></td>
                  <td><?php echo $patient['Remarks']; ?></td>
                  <td class="text-center"><button class="btn btn-danger delete_queue" id="<?php echo $patient['Queue_no'];?>"><i class="fa fa-close"></i></button></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <div class="box-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Add queue</button>
          </div>

        </div>

      </div>




      <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal_header">Add queue</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            </div>

            <div class="modal-footer">
              <button id="patient_button_search" type="button" class="btn btn-primary pull-left">Search Patient</button>
              
              <button id="patient_button_new" type="button" class="btn btn-primary">New Patient</button>
            </div>

          </div>
        </div>
      </div>

  
 </div>

    <div class="col-lg-4">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Latest Patients</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <ul class="users-list clearfix">
            <?php foreach ($latest_patients as $patient): ?>
              <li>
                <img src="<?php echo empty($patient['Image']) ? base_url().'assets/img/no-image.png' :  $patient['Image'];?>" alt="User Image">
                <a class="users-list-name" href="#"><?php echo $patient['FName'] . ' ' . $patient['LName'] ; ?></a>
                <span class="users-list-date">Today</span>
              </li>
            <?php endforeach; ?>


          </ul>
          <!-- /.users-list -->
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer -->
      </div>
    </div>
  </div>

</section>





<script type="text/javascript">
  $('document').ready(function(){

  //The function responsible for every clicked anchor link
  $(".profile_links").on('click', function(e) {
    event.preventDefault();

    $.get( baseUrl + this.id)
    .done(function( data ) {
      $('.content-wrapper').html(data);
    });
    
  });

 $(".delete_queue").on('click', function() {
   $.get( baseUrl + "secretary/delete_queue/" + this.id)
   .done(function( data ) {
    $.get( baseUrl + "secretary/dashboard")
    .done(function( data ) {
      $('.content-wrapper').html(data);
    });
  });
 });

  $("#patient_button_search").on('click', function() {
    $.get( baseUrl + 'secretary/patient_list')
    .done(function( data ) {
      $('body > div.wrapper > div > section.content > div:nth-child(2) > div.col-lg-8 > div.modal.fade.bd-example-modal-sm.show > div > div > div.modal-body').html(data);
    });
    
  });

  $("#patient_button_new").on('click', function() {
    $.get( baseUrl + 'secretary/patient_new')
    .done(function( data ) {
      $('body > div.wrapper > div > section.content > div:nth-child(2) > div.col-lg-8 > div.modal.fade.bd-example-modal-sm.show > div > div > div.modal-body').html(data);
    });
    
  }); 


}); 



</script>
