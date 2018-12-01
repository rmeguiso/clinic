
  <section class="content-header">
   <h1>Patients</h1>

   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Patient Diagnosis</a></li>

    <li class="active">Patient Diagnosis</li>
  </ol>

</section>


<section class="content">


  <div class="box box-default color-palette-box">

    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-users"></i> All Patients Diagnosis</h3>

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
          <th scope="col">Diagnosis</th>
          
          
        </tr>
      </thead>

      
      <tbody>
        <?php foreach ($diagnosiss as $diagnosis): ?>
          <tr>
            <td>
              <p id="patient_id" class="text-secondary"><?php echo $diagnosis['ID']; ?></p>
            </td>
            <td>
              <img style="width: 50px;" class="img-circle img-bordered-sm" src="<?php echo empty($diagnosis['Image']) ? "https://image.shutterstock.com/image-vector/photo-coming-soon-symbol-450w-345348836.jpg" :  $doctor['Image'];?>" alt="user image">
              <strong>
                <a href='tblpatient'><?php echo $diagnosis['FName'] . ' ' . $diagnosis['LName'] ; ?></a>
              </strong>
            </td>
            <td> 
            <a href="#"><?php echo $diagnosis['Diagnosis']; ?></a>
            </td>
            
            
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    

    

  </div>
</div>


</section>





