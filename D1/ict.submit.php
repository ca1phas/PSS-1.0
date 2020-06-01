<?php

  if (isset($_POST['submit'])) {

    include_once "connect.php";

    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];
    $class = $_POST['class'];
    $pss = $_POST['pss'];

    if ($type == null or $quantity == null or $id == null or $class == null or $pss == null) {
      header('Location: ' . $_SERVER['HTTP_REFERER'].'?submit=empty');
    } else {

      $sql = "INSERT INTO record(date, type, quantity, id, class, pss) VALUES (now(),'$type','$quantity','$id','$class', '$pss');";
      $result = mysqli_query($conn, $sql);
      header('Location: ../D1/ict.php?submit=sucess');
    }
  }
    else {
    header('Location: ../D1/ict.php');
  }


 ?>
