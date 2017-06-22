<html>
<head><title>array input</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
</head>
<body>
  <div class="container">
<!-- this is indexing -->
<?php
    $student = array(1, 2, 3, "pokharel");
    echo $student[3];
 ?>

 <!-- this is associating -->
 <?php
     $student = array(
         'name' => "anusuman pokharel",
         'phone number' => "9861534925",
         'address' => "jadibuti"
    );
    print_r ($student);
    // $array = array(1, 2, 3, "ansuman pokharel");
    // 	print_r($array);

  ?>

</div>
</body>
</html>
