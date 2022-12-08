<?php
session_start();
ob_start();

//for main interfaces
if ( isset($_SESSION['id']) && isset($_SESSION['username']) ) {
  require_once "controllers/template.controller.php";
  require_once "controllers/auth.controller.php";

  require_once "controllers/pets.controller.php";
  require_once "controllers/users.controller.php";

  require_once "models/pets.model.php";
  require_once "models/users.model.php";
  require_once "models/changelog.model.php";

  $template = new ControllerTemplate();
  $template -> ctrTemplate();

}
//for login interface
else
{
  require_once "models/users.model.php";
  require_once "controllers/users.controller.php";
  require_once "controllers/auth.controller.php";
  require_once "controllers/logintemplate.controller.php";

  $logintemplate = new ControllerLoginTemplate();
  $logintemplate -> ctrLoginTemplate();
}
