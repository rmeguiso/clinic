
<section class="content-header">
 <h1>Diagnosis</h1>

 <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Diagnosis</a></li>

  <li class="active">Diagnosis List</li>
</ol>

</section>

<section class="content">


  <div class="box box-default color-palette-box">

    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-users"></i> All Diagnosis List</h3>

      <div class="box-tools">
        <div class="input-group input-group-sm" style="width: 250px; right: 30px;">

          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search Diagnosis..">

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
          <th scope="col">Diagnosis</th>
          <th scope="col">Description</th>
          
          
        </tr>
      </thead>

      

      
      <tbody>
        <?php foreach ($diagnosiss as $diagnosis): ?>
          <tr>
            <td>
              <p id="diagnosis_id" class="text-secondary"><?php echo $diagnosis['ID']; ?></p>
            </td>
            <td> 
              <p class="text-secondary"><?php echo $diagnosis['Diagnosis']; ?></p>
            </td>
            <td> 
              <p class="text-secondary"><?php echo $diagnosis['Description']; ?></p>
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


    $.ajax({
      type: "POST",
      url: baseUrl + "secretary/search_for_diagnosis",
      dataType : 'text',
      
      data: {    
        'search_field': search_field
      },



    }).done(function (data) {

      $('.box-body').html(data);
    });

  });

 });
</script>


