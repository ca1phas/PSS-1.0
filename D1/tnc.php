<head>
  <link rel="icon" href="logosk.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    include "header.php"
   ?>

   <main>
     <form class="form" action="tnc.submit.php" method="post">
       <select name="type">
         <option value="Table">Table</option>
         <option value="Chair">Chair</option>
       </select>
       <div class="form-container">
         <input class="input" name="quantity" type="number" placeholder="Quantity"></input>
       </div>
       <div class="form-container">
         <input class="input" name="id" type="number" placeholder="ID"></input>
       </div>
       <div class="form-container">
         <input class="input" name="class" type="text" placeholder="Class"></input>
       </div>
       <div class="form-container">
         <input class="input" name="pss" type="number" placeholder="PSS">
       </div>
       <div class="button">
         <input class="submit" type="submit" name="submit" value="Submit">
       </div>
    </form>
    <?php
      include "error2.php";
     ?>
   </main>
</body>
