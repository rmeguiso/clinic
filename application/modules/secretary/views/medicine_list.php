
<section class="content-header">
 <h1>Medicines</h1>

 <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i>Medicines</a></li>

  <li class="active">Medicine List</li>
</ol>

</section>

<!-- Main content -->
<section class="content">


  <div class="box box-solid">

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
      <div class="row">
        <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-body">
            <br><label>Medicine Name* : </label><br/>
            <input type="text" id="medicine_name" class="form-control" style = "width: 80%;"  value="" required autofocus><br/>
            <label>Description* : </label><br/>
            <input type="text" id="description" class="form-control" style = "width: 80%;"  value="" required><br/>
            <h6>All fields marked with asterisk(*) are required.</h6>
            <input type="hidden" id="id" value="" >
            <br><button class="btn btn-primary" id="save_button_new_medicine">Save</button>
            <br>
            </div>
          </div>
        </div>


        <div class="col-md-8">
         <div class="box box-solid">
           <table class="table">
            <thead>
              <tr>
                <!-- <th scope="col">ID</th> -->
                <th scope="col">Medicine</th>
                <th scope="col">Description</th>
                <!-- <th colspan="2" style ="text-align: center">Actions</th> -->

              </tr>
            </thead>

            <tbody>
              <?php foreach ($medicines as $key => $medicine): ?>
                <tr>

                  <td> 
                    <p class="text-secondary" id="Medicine"><?php echo $medicine['Medicine']; ?></p>
                  </td>
                  <td> 
                    <p class="text-secondary"><?php echo $medicine['Description']; ?></p>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>



        </div>
      </div>
    </div>
  </div>


</section>

</div>

<script type="text/javascript">

  $('document').ready(function(){
    $('#save_button_new_medicine').on('click', function() {
     event.preventDefault();

     medicine_name =  $("input#medicine_name").val();
     description = $("input#description").val();
     
     $.post( "secretary/add_medicine", { medicine_name: medicine_name, description: description })
     .done(function( data ) {
       alert("Success! Please refresh browser in order to see new information.");
     });
   });



  });

</script>


