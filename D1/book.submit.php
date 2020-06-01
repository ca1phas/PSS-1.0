<?php

  if (isset($_POST['submit'])) {

    include_once "connect.php";

    $type = $_POST['type'];
    $form = $_POST['form'];
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];
    $class = $_POST['class'];
    $pss = $_POST['pss'];

    if ($type == null or $form == null or $quantity == null or $id == null or $class == null or $pss == null) {
      header('Location: ' . $_SERVER['HTTP_REFERER'].'?submit=empty');
    } else {

      $checkValid = "SELECT * FROM bookrecord WHERE type = '$type';";
      $checkResult = mysqli_query($conn, $checkValid);
      $validationCheck = mysqli_num_rows($checkResult);

      if ($validationCheck > 0) {

        $sql = "INSERT INTO record(date, type, form, quantity, id, class, pss) VALUES (now(),'$type','$form','$quantity','$id','$class', '$pss');";
        $result = mysqli_query($conn, $sql);
        header('Location: ../D1/borrow.php?submit=sucess');

      }

      else {
        header('Location: ' . $_SERVER['HTTP_REFERER'].'?invalidtype');
      }
    }

    }

  else {
    header('Location: ../D1/borrow.php');
  }


 ?>
