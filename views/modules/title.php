<?php
  $page = $_SERVER['QUERY_STRING'];
  $separator = " | ";
  $main = "PAMS";

  if (isset($_GET['idPet'])) {
    echo "<title>Update pet " . $separator . $main . "</title>";
  }
  elseif (isset($_GET['idUser'])) {
    echo "<title>Update user " . $separator . $main . "</title>";
  }
  else switch ($page) {
    // Pets
    case 'route=pets':
      echo "<title>Pets" . $separator . $main . "</title>";
      break;
    case 'route=petadd':
      echo "<title>Add new pet" . $separator . $main . "</title>";
      break;
    //Users
    case 'route=users':
      echo "<title>Users" . $separator . $main . "</title>";
      break;
    case 'route=useradd':
      echo "<title>Add new user" . $separator . $main . "</title>";
      break;
    case 'route=login':
      echo "<title>Login" . $separator . $main . "</title>";
      break;
    case 'route=register':
      echo "<title>Register" . $separator . $main . "</title>";
      break;
    //Home page
    default:
      echo "<title>" . $main . "</title>";
      break;
  }
?>
