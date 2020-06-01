<head>
  <link rel="icon" href="logosk.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    include "header.php"
   ?>

   <main>
     <form class="form" action="ict.submit.php" method="post">
       <select name="type">
       <!-- Wires -->
         <option value="Extension Wire">Extension Wire</option>
         <option value="HDMI">HDMI</option>
         <option value="Power Cable">Power Cable</option>
         <option value="Radio Wire">Radio Wire</option>
         <option value="VGA">VGA</option>

         <!-- PA System -->
         <option value="Wired Mic">Wired Mic</option>
         <option value="Wireless Mic">Wireless Mic</option>
         <option value="Mic Stand">Mic Stand</option>
         <option value="Portable Mic">Portable Mic</option>
         <option value="Hailer">Hailer</option>

         <option value="Laptop">Laptop</option>
         <option value="OHP">OHP</option>
         <option value="Projector">Projector</option>
         <option value="Radio">Radio</option>
         <option value="Scanner">Scanner</option> 
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
