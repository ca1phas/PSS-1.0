<head>
  <link rel="icon" href="logosk.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    include "header.php"
   ?>
   <main>
      <form class="form" action="book.submit.php" method="post">
        <div class="form-container">
         <input class="input" name="type" type="text" placeholder="No.Panggilan"></input>
        </div>
        <select name="form">
         <option>Form</option>
         <option value="0">Peralihan</option>
         <option value="1">Form 1</option>
         <option value="2">Form 2</option>
         <option value="3">Form 3</option>
         <option value="PT3">PT3</option>
         <option value="4">Form 4</option>
         <option value="5">Form 5</option>
         <option value="SPM">SPM</option>
         <option value="-">-</option>
        </select>
        <div class="form-container">
         <input class="input" name="quantity" type="number" placeholder="Quantity"></input>
        </div>
        <div class="form-container">
         <input class="input" name="id" type="text" placeholder="ID"></input>
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
     </div>
     <?php
      include "error.php";
     ?>
   </main>
</body>
