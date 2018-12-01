<?php main_header(); ?>
<?php sidebar_secretary('dashboard','',''); ?>

<div class="content-wrapper">
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
          <h4>$365.76</h4>
          <p>Gross Revenue</p>
        </div>
      </div>
    </div>

    <div class="col-lg">
      <div class="box box-solid text-center">

        <div class="box-body">
          <h4> 365</h4>
          <p>Total Patients </p>
        </div>
      </div>
    </div>

    <div class="col-lg">
      <div class="box box-solid text-center">

        <div class="box-body">
          <h4> 15</h4>
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
<div class="box box-default color-palette-box">

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
              <td class="text-center"><button class="btn btn-danger" ><i class="fa fa-close"></i></button></td>
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
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_header">Add queue</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
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
      <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Patients</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <?php foreach ($patients as $patient): ?>
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
                <div class="box-footer text-center">
                  <a href="#secretary/patient_list" class="links">View All Patients</a>
                </div>
                <!-- /.box-footer -->
              </div>
    </div>
  </div>

</section>
<!-- /.content -->
</div>

<?php main_footer(); ?>


<script type="text/javascript">
$('document').ready(function(){

    

  //The function responsible for every clicked anchor link
  $(".links").on('click', function(e) {
    e.preventDefault();
    var url = this.href.split('#'); 
    
    $.get( baseUrl + url[1])
    .done(function( data ) {
      $('.content-wrapper').html(data);
    });
    
  });

  $(".profile_links").on('click', function(e) {
    event.preventDefault();

    $.get( baseUrl + this.id)
    .done(function( data ) {
      $('.content-wrapper').html(data);
    });
    
  });



   $("li > .links").click(function() {
   
    $("li > .links").removeClass('active');
    $(this).addClass('active');
    
   });

  $("#side li.treeview > a").click(function() {
    $('span').removeClass('active');
    $('li > a').removeClass('active');

    $(this).addClass('active').children().addClass('active');
    $("#dash").removeClass('active');
   });


  $("#dash").click(function() {
    $(".treeview-menu").hide();
    $('span').removeClass('active');
    $(".treeview").removeClass('menu-open')
    $(this).addClass('active');
  });


  $(".patient_profile").on('click', function(e) {
    event.preventDefault();

    $.get( baseUrl + "patient/profile/"+ this.id)
    .done(function( data ) {
      $('.content-wrapper').html(data);
    });
  }); 

  $("#patient_button_search").on('click', function() {
    window.location.href=baseUrl + "secretary/patient_search";
  });

  $("#patient_button_new").on('click', function() {
    window.location.href= baseUrl + "secretary/patient_new";
  });  
}); 



</script>