<?php
  $category = $_GET['category'];
  $clients = (new ControllerClients)->ctrShowClientsByCategory($category);
  print_r($clients);
?>

<div></div>
