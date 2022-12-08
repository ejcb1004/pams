<?php
  $obj = new ControllerAuthentication();
  $unlock = $obj->ctrResetFailCounter();
  if ($unlock) {
    $obj->ctrUpdateStatus("inactive");
    session_unset();
    session_destroy();
    header("Location: home");
  }
