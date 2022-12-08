<?php
require_once "../controllers/users.controller.php";
require_once "../models/users.model.php";

class usersTable{
	public function showUsersTable(){
		$users = (new ControllerUsers)->ctrShowUsers();
		if(count($users) == 0){
			$jsonData = '{"data":[]}';
			echo $jsonData;
			return;
		}
		$jsonData = '{
			"data":[';
				for($i=0; $i < count($users); $i++){
					$buttons = "<div class='btn-group group-round m-1'><button class='btn btn-sm btn-light waves-effect waves-light btnEditUser' idUser='".$users[$i]["id"]."'><i class='fa fa-pen'></i></button><button class='btn btn-sm btn-danger waves-effect waves-light btnDeleteUser' idUser='".$users[$i]["id"]."'><i class='fa fa-trash'></i></button></div>";
					$jsonData .='[
						"'.$users[$i]["userid"].'",
						"'.$users[$i]["username"].'",
						"'.$users[$i]["password"].'",
						"'.$buttons.'"
					],';
				}
				$jsonData = substr($jsonData, 0, -1);
				$jsonData .= ']
			}';
		echo $jsonData;
	}
}

$activateUsers = new usersTable();
$activateUsers -> showUsersTable();
