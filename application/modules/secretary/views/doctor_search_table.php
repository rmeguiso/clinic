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
              <p id="patient_id" class="text-secondary"><?php echo $doctor['ID']; ?></p>

            </td>
            <td>
              <img style="width: 50px;" class="img-circle img-bordered-sm" src="<?php echo empty($doctor['Image']) ? "https://image.shutterstock.com/image-vector/photo-coming-soon-symbol-450w-345348836.jpg" :  $doctor['Image'];?>" alt="user image">
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



   

