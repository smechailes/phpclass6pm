<?php include "head.php"?>
<div class="container">
<?php
$student= array(
          array(
            "name" => "anusuman",
            "address" => "jadibuti",
            "phone number" => "9861524925",
            "edit" => "edit",
            "delete" => "delete"
          ),
          array(
            "name" => "CS",
            "address" => "tikathali",
            "phone number" => "no idea",
            "edit" => "edit",
            "delete" => "delete"
          ),
          array(
            "name" => "kamlesh",
            "address" => "gwarko",
            "phone number" => "no idea",
            "edit" => "edit",
            "delete" => "delete"
          ),
          array(
            "name" => "anushruti",
            "address" => "silgudi",
            "phone number" => "nai malai tha chaina",
            "edit" => "edit",
            "delete" => "delete"
          ),
          array(
            "name" => "jurita",
            "address" => "hk",
            "phone number" => "nai malai thachaina",
            "edit" => "edit",
            "delete" => "delete"
          ),
          array(
            "name" => "kiran",
            "address" => "sanepa",
            "phone number" => "nai malai thachaina",
            "edit" => "edit",
            "delete" => "delete"
          ),
          array(
            "name" => "devendra",
            "address" => "lokanthali",
            "phone number" => "9842897564",
            "edit" => "edit",
            "delete" => "delete"
          ),
          array(
            "name" => "anusuman",
            "address" => "jadibuti",
            "phone number" => "9861524925",
            "edit" => "edit",
            "delete" => "delete"
          ),


  )
 ?>
 <table class="table table-bordered table-hover">
   <thead>
     <th>S.N.</th>
     <th>Name</th>
     <th>Address</th>
     <th>Phone number</th>
     <th>edit</th>
     <th>delete</th>

   </thead>
   <tbody>

     <?php
     $i=0;
     foreach ($student as $key => $value) {

       ?>
       <tr>
       <td><?php echo $i; ?> </td>
       <td><?php echo $student[$key]['name']; ?> </td>
       <td><?php echo $student[$key]['address']; ?> </td>
       <td><?php echo $student[$key]['phone number']; ?> </td>
       <td href="#"><?php echo $student[$key]['edit']; ?> </td>
       <td href="#"><?php echo $student[$key]['delete']; ?> </td>

     </tr>
       <?php
       $i++;
     }
     ?>

   </tbody>
 </table>
 </div>
<?php include "footer.php"?>
