<?php
  $databases = ['pams'];//backup database will be saved in this subfolder named after the database name
  $user = "root";
  $password = "";
  $host = "localhost";

  foreach($databases as $database){
  	if (!file_exists(("C:/Database_Backup/$database"))){//this snippet will automatically create new folder if folder Database_Backup not detected
  		mkdir("C:/Database_Backup/$database");
  	}

  	$filename = $database."_".date("F_d_Y")."@".date("g_ia").uniqid("_",false);
  	$folder = "C:/Database_Backup/$database/".$filename.".sql";
  	exec("C:/xampp/mysql/bin/mysqldump --user={$user} --password={$password} --host={$host} {$database} --result-file={$folder}",$output);
    //exec command resides inside xampp/mysql/bin/mysqldump application
  }
