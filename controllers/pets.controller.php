<?php

class ControllerPets{
	// F1 ctrGetPetid: START
	public function ctrGetPetid(){
		$petid = "PT" . str_pad((new ModelPets)->mdlGetId(), 4, "0", STR_PAD_LEFT);
		return $petid;
	} // F1 ctrGetPetid: END

	// F2 ctrCreatePet: START
	public function ctrCreatePet(){
		if(isset($_POST["newPname"])){ // if pet name is set: START

				// if checkbox is set or not: START
	   		if (isset($_POST["newIsadopted"])){
			    $isadopted = 1;
		    }else{
		    	$isadopted = 0;
		    } // if checkbox is set or not: END

				// if checkbox is set or not: START
	   		if (isset($_POST["newIsreserved"])){
			    $isreserved = 1;
		    }else{
		    	$isreserved = 0;
		    } // if checkbox is set or not: END

				// transaction log
				$transacid = (new ModelChangelog)->mdlGetId();
				$description = $_SESSION["username"] . " added a new pet: " . $_POST["newPname"];
				$logtime = date("Y-m-d H:i:s", strtotime("+7 hours"));

				// F2A Array Storage: START
				/* Description: This stores $_POST values and
				   other variables into an array. */
				$petid = (new ControllerPets)->ctrGetPetid();
				$table = "pets";
		   	$data = array("petid"=>$petid,
		   				  "isadopted"=>$isadopted,
		   				  "pname"=>$_POST["newPname"],
			          "species"=>$_POST["newSpecies"],
			          "breed"=>$_POST["newBreed"],
			          "sex"=>$_POST["newSex"],
			          "acqdate"=>$_POST["newAcqdate"],
								"isreserved"=>$isreserved,
								"transacid"=>$transacid,
								"description"=>$description,
								"logtime"=>$logtime
								); // F2A Array Storage: END

				// F2B Error Trapping: START
				/* Description: This opens a SweetAlert dialog box
				   if the entry is incomplete. */
				$null = true;

				foreach ($data as $key => $value) {
					if($value == "") { // when it finds an empty element
						$null = true; // it is confirmed as "true"
						break; // and the loop ends
					}
					else {
						$null = false; // there are no empty elements
					}
				}
				if($null) // if $null is true: START
			    echo '<script>
			       swal({
			         type: "error",
			         title: "I think you\'re missing something...",
			         text: "You have not filled in all the fields. Please try again.",
			          }).then(function(result){
			              if (result.value) {
			              window.location = "petadd";
			              }
			            })
			       </script>'; // if $null is true: END
			  else { // if $null is false: START
			   	$answer = (new ModelPets)->mdlAddPet($table, $data);
					$log = (new ModelChangelog)->mdlChangelog($data);

					// if $answer returns "ok": START
			   	if($answer == "ok"){
						echo'<script>

						swal({
							  type: "success",
							  title: "Pet has been successfully appended!",
							  showConfirmButton: true,
							  confirmButtonText: "OK"
							  }).then(function(result){
										if (result.value) {
										window.location = "petadd";
										}
									})
						</script>';
					} // if $answer returns "ok": END
				} // if $null is false: END
				// F2B Error Trapping: END
		} // if pet name is set: END
	} // F2 ctrCreatePet: END

	// F3a ctrShowPets: START
	public function ctrShowPets(){
		$answer = (new ModelPets)->mdlShowPets();
		return $answer;
	} // F3a ctrShowPets: END

/*
	// F3b ctrShowPetsByCategory: START
	static public function ctrShowPetsByCategory($category){
		$answer = (new ModelPets)->mdlShowPetsByCategory($category);
		return $answer;
	} // F3b ctrShowPetsByCategory: START
*/

	// F4 ctrEditPet: START
	public function ctrEditPet(){
		if(isset($_POST["editPname"])){ // if pet name is set: START

				// if checkbox is set or not: START
	   		if (isset($_POST['editIsadopted'])){
			    $isadopted = 1;
		    }
				else {
		    	$isadopted = 0;
		    } // if checkbox is set or not: END

				// if checkbox is set or not: START
	   		if (isset($_POST['editIsreserved'])){
			    $isreserved = 1;
		    }
				else {
		    	$isreserved = 0;
		    } // if checkbox is set or not: END

				// transaction log
				$transacid = (new ModelChangelog)->mdlGetId();
				$description = $_SESSION["username"] . " updated " . $_POST["editPname"] . "'s details";
				$logtime = date("Y-m-d H:i:s", strtotime("+7 hours"));

				// F4A Array Storage: START
				/* Description: This stores $_POST values and
				   other variables into an array. */
				$table = "pets";
		   	$data = array("id"=>$_POST["idPet"],
   		          "petid"=>$_POST["editPetid"],
   		          "isadopted"=>$isadopted,
								"pname"=>$_POST["editPname"],
			          "species"=>$_POST["editSpecies"],
			          "breed"=>$_POST["editBreed"],
			          "sex"=>$_POST["editSex"],
			          "acqdate"=>$_POST["editAcqdate"],
								"isreserved"=>$isreserved,
								"transacid"=>$transacid,
								"description"=>$description,
								"logtime"=>$logtime
							); // F4A Array Storage: END

				// F4B Error Trapping: START
				/* Description: This opens a SweetAlert dialog box
					 if the entry is incomplete. */
				$null = true;

				foreach ($data as $key => $value) {
					if($value == "") { // when it finds an empty element
						$null = true; // it is confirmed as "true"
						break; // and the loop ends
					}
					else {
						$null = false; // there are no empty elements
					}
				}
				if($null) // if $null is true: START
					echo '<script>
						var idPet = document.getElementById("idPet").value;
						 swal({
							 type: "error",
							 title: "I think you\'re missing something...",
							 text: "You have not filled in all the fields. Please try again.",
								}).then(function(result){
										if (result.value) {
										window.location = "index.php?route=petedit&idPet=" + idPet;
										}
									})
						 </script>'; // if $null is true: END
				else { // if $null is false: START
			   	$answer = (new ModelPets)->mdlEditPet($table, $data);
					$log = (new ModelChangelog)->mdlChangelog($data);

			   	if($answer == "ok"){
					echo'<script>
					swal({
						  type: "success",
						  title: "Pet information has been successfully updated!",
						  showConfirmButton: true,
						  confirmButtonText: "OK"
						  }).then(function(result){
							if (result.value) {
							  window.location = "petadd";
							}
						})
					</script>';
				} // if $answer returns okay: END
			} // if $null is false: END
			// F4B Error Trapping: END
		} // if pet name is set: END
	} // F4 ctrEditPet: END

	// F5 ctrDeletePet: START
	public function ctrDeletePet(){
		if(isset($_GET["idPet"])){ // if index is set: START
			// transaction log
			$transacid = (new ModelChangelog)->mdlGetId();
			$description = $_SESSION["username"] . " deleted " . $_POST["editPname"] . "'s record";
			$logtime = date("Y-m-d H:i:s", strtotime("+7 hours"));

			$table = "pets";
			$data = array("id"=>$_GET["idPet"],
										"transacid"=>$transacid,
										"description"=>$description,
										"logtime"=>$logtime
							);

			$answer = (new ModelPets)->mdlDeletePet($table, $data);
			$log = (new ModelChangelog)->mdlChangelog($data);

			if($answer == "ok"){ // if answer returns "ok": START
				echo'<script>
				swal({
					  type: "success",
					  title: "Pet has been successfully deleted!",
					  showConfirmButton: true,
					  confirmButtonText: "OK"
					  }).then(function(result){
								if (result.value) {
								window.location = "pets";
								}
							})
				</script>';
			} // if answer returns "ok":
		} // if index is set: END
	} // F5 ctrDeletePet: END

	// F6 ctrFetchRecord: START
	// static public function ctrFetchRecord(){
	// 	$pet = (new ModelPets)->mdlFetchRecords();
	// 	return $pet;
	//} // F6 ctrFetchRecord: END
} // ControllerPets: END
