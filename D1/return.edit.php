<head>
  <link rel="icon" href="logosk.png">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
    include "header.php";
    include_once "connect.php";

    $returnid = $_COOKIE["record_id"];

    $sql = "SELECT type, form, quantity, class, pss, return_date, return_quantity, return_pss FROM record WHERE record_id = '$returnid';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      $row = mysqli_fetch_assoc($result);
      echo '<section><div class="form"><form class="bookform" action="return.editsubmit.php" method="post">';
      echo '<div class="form-container"><input class="input" name="type" type="text" placeholder="No.Panggilan" value="'.$row["type"].'"></input></div>';
      echo '<div class="form-container"><input class="input" name="form" type="text" placeholder="Form" value="'.$row["form"].'"></input></div>';
      echo '<div class="form-container"><input class="input" name="quantity" type="number" placeholder="Quantity" value = "'.$row["quantity"].'""></input></div>';
      echo '<div class="form-container"><input class="input" name="class" type="text" placeholder="Class" value = "'.$row["class"].'""></input></div>';
      echo '<div class="form-container"><input class="input" name="pss" type="number" placeholder="PSS" value = "'.$row["pss"].'""></div>';
      echo '<div class="form-container"><input class="input" name="return_quantity" type="number" placeholder="Return Quantity" "'.$row["return_quantity"].'""></div>';
      echo '<div class="form-container"><input class="input" name="return_pss" type="number" placeholder="Return PSS" "'.$row["return_pss"].'""></div>';
      echo '<div class="form-container"><input class="submit" type="submit" name="submit" value="Submit"></div>';
      echo '</form></div></section>';
    }
   ?>
</body>
