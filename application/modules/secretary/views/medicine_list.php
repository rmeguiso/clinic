
  <section class="content-header">
   <h1>Medicines</h1>

   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Medicines</a></li>

    <li class="active">Medicine List</li>
  </ol>

</section>

<!-- Main content -->
<section class="content">


  <div class="box box-default color-palette-box">

    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-users"></i> All Medicine List</h3>

      <div class="box-tools">
        <div class="input-group input-group-sm" style="width: 250px; right: 30px;">

          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search Medicines..">

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
          <th scope="col">Medicine</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>

      

      
      <tbody>
        <?php foreach ($medicines as $medicine): ?>
          <tr>
            <td>
              <p id="medicines_id" class="text-secondary"><?php echo $medicine['ID']; ?></p>
            </td>
            <td> 
              <p class="text-secondary"><?php echo $medicine['Medicine']; ?></p>
            </td>
            <td> 
              <p class="text-secondary"><?php echo $medicine['Description']; ?></p>
            </td>
            <td class="text-center"> 
              <button class="btn btn-danger" ><i class="fa fa-close"></i></button>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    

    
  </div>
</div>


</section>




