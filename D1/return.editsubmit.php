<?php
  include_once "connect.php";

  $returnid = $_COOKIE["record_id"];
  $type = $_POST['type'];
  $quantity = $_POST['quantity'];
  $class = $_POST['class'];
  $pss = $_POST['pss'];
  $rquantity = $_POST['return_quantity'];
  $rpss = $_POST['return_pss'];


  $sql = "UPDATE record SET type ='$type',quantity = '$quantity' ,class = '$class',pss = '$pss',return_date = now(),return_quantity = '$rquantity', return_pss = '$rpss' WHERE record_id ='$returnid'";
  $result = mysqli_query($conn, $sql);

  header("Location: ../D1/return.php?submit=sucess");
 ?>
