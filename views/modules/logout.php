<?php
  $obj = new ControllerAuthentication();
  $obj->ctrUpdateStatus("inactive");
  session_unset();
  session_destroy();

  header("Location: home");
