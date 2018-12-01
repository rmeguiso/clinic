
<section class="content-header">
 <h1>Doctors</h1>

 <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Doctors</a></li>

  <li class="active">Doctors List</li>
</ol>

</section>

<!-- Main content -->
<section class="content">


  <div class="box box-default color-palette-box">

    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-users"></i> All Doctors</h3>

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



    <div class="box-body">

     <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Doctor</th>
          <th scope="col">Specialization</th>
          
          
        </tr>
      </thead>

      
      <tbody>
        <?php foreach ($doctors as $doctor): ?>
          <tr>
            <td>
              <p id="doctor_id" class="text-secondary"><?php echo $doctor['ID']; ?></p>

            </td>
            <td>
              <img style="width: 50px;" class="img-circle img-bordered-sm" src="<?php echo empty($doctor['Image']) ? base_url().'assets/img/no-image.png' :  $doctor['Image'];?>" alt="user image">
              <strong>
                <a href="#"><?php echo $doctor['FName'] . ' ' . $doctor['LName'] ; ?></a>
              </strong>
            </td>
            <td> 
              <p class="text-secondary"><?php echo $doctor['Specialization']; ?></p>
            </td>
            
            
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>



  </div>
</div>


</section>





<script type="text/javascript">

  $('document').ready(function(){

   $('#search_form').on('submit', function(e) {
    e.preventDefault();
    var search_field = $("#search_field").val();

    $.post( "secretary/search_for_doctor", { search_field: search_field })
    .done(function( data ) {
     $('.box-body').html(data);
   });
  });

 });
</script>
