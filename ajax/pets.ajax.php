<?php
require_once "../controllers/pets.controller.php";
require_once "../models/pets.model.php";

class petsTable{
	public function showPetsTable() {
		$pets = (new ControllerPets)->ctrShowPets();
		if(count($pets) == 0){
			$jsonData = '{"data":[]}';
			echo $jsonData;
			return;
		}
		$jsonData = '{
			"data":[';
				for($i=0; $i < count($pets); $i++){
		  			$buttons = "<div class='btn-group group-round m-1'><button class='btn btn-sm btn-light waves-effect waves-light btnEditPet' idPet='".$pets[$i]["id"]."'><i class='fa fa-pen'></i></button><button class='btn btn-sm btn-danger waves-effect waves-light btnDeletePet' idPet='".$pets[$i]["id"]."'><i class='fa fa-trash'></i></button></div>";
						$adp_bit = $pets[$i]["isadopted"];
						if ($adp_bit == 1) $adp_bit = "<input type='checkbox' checked='checked' onclick='return false' />";
						else $adp_bit = "<input type='checkbox' onclick='return false' />";
						$res_bit = $pets[$i]["isreserved"];
						if ($res_bit == 1) $res_bit = "<input type='checkbox' checked='checked' onclick='return false' />";
						else $res_bit = "<input type='checkbox' onclick='return false' />";
						$sex_bit = $pets[$i]["sex"];
						if ($sex_bit == 0) $sex_bit = "Male";
						else $sex_bit = "Female";
					$jsonData .='[
						"'.$adp_bit.'",
						"'.$pets[$i]["pname"].'",
						"'.$pets[$i]["species"].'",
						"'.$pets[$i]["breed"].'",
						"'.$sex_bit.'",
						"'.$pets[$i]["acqdate"].'",
            "'.$res_bit.'",
						"'.$buttons.'"
					],';
				}
				$jsonData = substr($jsonData, 0, -1);
				$jsonData .= ']
			}';
		echo $jsonData;
	}
}

$activatePets = new petsTable();
$activatePets -> showPetsTable();
