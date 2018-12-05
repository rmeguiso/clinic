<?php if (empty($physical_profiles)) 
{
   echo "No physical records found.";
   exit;
 }
 ?>
 <div class="card">
<div class="card-body">
  <div class="container">
<div class="row">

      <table class="table">
       <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Height</th>
          <th scope="col">Weight</th>
          <th scope="col">Blood Pressure</th>
          <th scope="col">Temperature</th>
          <th scope="col">Date taken</th>
        </tr>
      </thead>
      <tbody>

       <?php foreach ($physical_profiles as $physical_profile): ?>
        <tr>
         <th scope="row"><?php echo $physical_profile['ID'];?></th>
         <td><?php echo $physical_profile['Height'];?></td>
         <td><?php echo $physical_profile['Weight'];?></td>
         <td><?php echo $physical_profile['BP'];?></td>
         <td><?php echo $physical_profile['Temp'];?></td>
         <td><?php echo $physical_profile['Date'];?></td>
       </tr>
     <?php endforeach ?>



   </tbody>
 </table>
</div>
</div>
</div>
</div>