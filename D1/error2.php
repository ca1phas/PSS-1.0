<?php
  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if (strpos($fullUrl, "submit=empty") == true) {
    echo '<div id="box"><h1>Please Fill In All Fields</h1></div>';
  }
 ?>

<script>
  var box = document.querySelector("#box")

  document.addEventListener("click",function(event){
    if (event.target.closest("#box")) return;
    box.classList.add("js-is-hidden");
  })
</script>
