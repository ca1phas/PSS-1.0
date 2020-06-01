<head>
  <link rel="icon" href="logosk.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    include "header.php"
   ?>

   <main>
      <form class="form" action="tools.submit.php" method="post">
       <select name="type">
       <!-- Geo -->
         <option value="Bentuk Muka Bumi">Bentuk Muka Bumi</option>
         <option value="Glob">Glob</option>
         <option value="Kompas">Kompas</option>
         <option value="Peta Malaysia">Peta Malaysia</option>
         <option value="Peta Asia Tenggara">Peta Asia Tenggara</option>
         <option value="Peta Kosong">Peta Kosong</option>
         <!-- Math -->
         <option value="Calculator">Calculator</option>
         <option value="Pembaris Panjang">Pembaris Panjang</option>
         <option value="Pembaris Segi Tiga">Pembaris Segi Tiga</option>
         <option value="Solid Geometri">Solid Geometri</option>
         <option value="Jangka Lukis">Jangka Lukis</option>
         <option value="Jangka Sudut">Jangka Sudut</option>

         <!-- White Board -->
         <option value="White Board">White Board</option>
         <option value="Marker Pen">Marker Pen</option>
         <option value="Pemadam Papan Putih">Pemadam Papan Putih</option>

         <!-- Game -->
         <option value="Congkak">Congkak</option>
         <option value="Chess">Chess</option>
         <option value="White Board Stand">White Board Stand</option>
         <option value="Sudoku">Sudoku</option>
         <option value="Sahibba">Sahibba</option>
         <option value="Math Magic">Math Magic</option>
         <option value="IQ Puzzle">IQ Puzzle</option>
         <option value="Permainan Dam">Permainan Dam</option>
         <option value="Mind Challenge">Mind Challenge</option>
         <option value="Ramagon">Ramagon</option>
         <option value="Snake Chess">Snake Chess</option>
         
         <option value="Bell">Bell</option>
         <option value="Thermometer">Thermometer</option>
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