<head>
  <link rel="stylesheet" href="tablestyle.css">
  <script src="jquery-3.4.1.js"></script>
</head>
</head>
<table class="table" id="table">
 <tr>
   <th class="id_col">Record ID</th>
   <th class="date_col">Date</th>
   <th class="t_col">Type</th>
   <th class="f_col">Form</th>
   <th class="q_col">Quantity</th>
   <th class="c_col">Class</th>
   <th class="p_col">PSS</th>
   <th class="date_col">Return Date</th>
   <th class="q_col">Return Quantity</th>
   <th class="id_col">Return PSS</th>
   <th class="edit_col">Edit</th>
 </tr>

<?php
  include "header.php";
  include_once "connect.php";

  $id = $_POST['id'];


 $sql = "SELECT record_id, date, type, form, quantity, class, pss, return_date, return_quantity, return_pss FROM record WHERE id = '$id';";
 $result = mysqli_query($conn, $sql);
 $resultCheck = mysqli_num_rows($result);

 if ($resultCheck > 0) {
   while ($row = mysqli_fetch_assoc($result)){
     echo "<tr><td class='trcid'>". $row["record_id"]."</td><td class='tdate'>".$row["date"]."</td><td class = 'ttype'>".$row["type"]."</td><td class ='tform'>".$row["form"]."</td><td class ='tquan'>".$row["quantity"]."</td><td class = 'tclass'>".$row["class"]."</td>";
     echo "<td class = 'tpss'>".$row["pss"]."</td><td class = 'trdate'>".$row["return_date"]."</td><td class = 'trquan'>".$row["return_quantity"]."</td><td class = 'trpss'>".$row["return_pss"]."</td>";
     echo "<td><a href='return.edit.php' class ='dot'></a></td>";
   }
 }
 ?>
 </table>

 <form method="post">

 </form>

 <script>

         $(".dot").click(function() {

          document.cookie = "record_id="+ $(this).closest('tr').find('.trcid').text()+ "";

         });

  </script>
