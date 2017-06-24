<?php include "header.php";?>
  <div class="container">
 <?php
     $student = array(
       array(
         'name' => "anusuman ",
         'phone number' => "9861",
         'address' => "jadibuti"
       ),

       array(
           'name' => "anusuman p",
           'phone number' => "98615",
           'address' => "jadibuti"
                      ),

        array(
            'name' => "anusuman pok",
            'phone number' => "986153",
            'address' => "jadibuti"
         ),

         array(
             'name' => "anusuman pokh",
             'phone number' => "9861534",
             'address' => "jadibuti"
        ),

        array(
          'name' => "anusuman pokha",
          'phone number' => "98615349",
          'address' => "jadibuti"
        ),
        array(
          'name' => "anusuman pokhar",
          'phone number' => "986153492",
          'address' => "jadibuti"
        ),

        array(
          'name' => "anusuman pokharel",
          'phone number' => "9861534925",
          'address' => "jadibuti"
        )
    );

?>

<table class="table table-bordered">
  <thead>
    <th>S.no.</th>
  <th>Name</th>
  <th>Phone number </th>
  <th>Address </th>
  </thead>
  <tbody>
    <?php

    for($i=0, $y=0; $i<count($student); $i++, $y++){

      echo "<tr>";
      echo "<td>".$y."</td>";
      echo "<td>".$student[$i]['name']."</td>";
      echo "<td>".$student[$i]['phone number']."</td>";
      echo "<td>".$student[$i]['address']."</td>";
      echo "</tr>";

      }
  ?>
  </tbody>
</table>



</div>
<?php include "footer.php";?>
