<head>
  <link rel="icon" href="logosk.png">
  <link rel="stylesheet" href="style.css">
<body>
  <?php
    include "header.php";
    include_once "connect.php";
   ?>
  <form action="return.submit.php" class="form" method="post">
    <div class="form-container">
      <input class="input" type="number" name="id" placeholder="ID">
    </div>
    <div class="button">
      <input class="submit" type="submit" name="submit" value="Submit">
    </div>
  </form>
</body>
