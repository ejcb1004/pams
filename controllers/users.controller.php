<?php

class ControllerUsers{
	// F1 ctrGetUserid: START
	static public function ctrGetUserid(){
		$petid = "US" . str_pad((new ModelUsers)->mdlGetId(), 4, "0", STR_PAD_LEFT);
		return $petid;
	} // F1 ctrGetUserid: END

	// F1 ctrCreateUser: START
	static public function ctrCreateUser(){
		if(isset($_POST["newUsername"])){ // if name is set: START
				// F1A Array Storage: START
				/* Description: This stores $_POST values and
				   other variables into an array. */
				$table = "authentication";
				// Encryption of password using password_hash() method
				$hash = password_hash($_POST["newPassword"], PASSWORD_DEFAULT);
		 		$userid = (new ControllerUsers)->ctrGetUserid();
		   	$data = array("userid"=>$userid,
								"username"=>$_POST["newUsername"],
								"password"=>$hash
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
			              window.location = "useradd";
			              }
			            })
			       </script>'; // if $null is true: END
			  else { // if $null is false: START
			   	$answer = (new ModelUsers)->mdlAddUser($table, $data);

					// if $answer returns "ok": START
			   	if($answer == "ok"){
						echo'<script>

						swal({
							  type: "success",
							  title: "User has been successfully appended!",
							  showConfirmButton: true,
							  confirmButtonText: "OK"
							  }).then(function(result){
										if (result.value) {
										window.location = "useradd";
										}
									})
						</script>';
					} // if $answer returns "ok": END
				} // if $null is false: END
				// F2B Error Trapping: END
		} // if name is set: END
	} // F2 ctrCreateUser: END

	// F3 ctrShowUsers: START
	static public function ctrShowUsers(){
		$answer = (new ModelUsers)->mdlShowUsers();
		return $answer;
	} // F3 ctrShowUsers: END

	// F4 ctrEditUser: START
	static public function ctrEditUser(){
		if(isset($_POST["editUsername"])){ // if client name is set: START

				// F4A Array Storage: START
				/* Description: This stores $_POST values and
				   other variables into an array. */
					$table = "authentication";
					// Encryption of password using password_hash() method
					$hash = password_hash($_POST["editPassword"], PASSWORD_DEFAULT);
	 		   	$data = array("id"=>$_POST["idUser"],
									"userid"=>$_POST["editUserid"],
	 		   				  "username"=>$_POST["editUsername"],
	 								"password"=>$hash
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
						var idUser = document.getElementById("idUser").value;
						 swal({
							 type: "error",
							 title: "I think you\'re missing something...",
							 text: "You have not filled in all the fields. Please try again.",
								}).then(function(result){
										if (result.value) {
										window.location = "index.php?route=useredit&idUser=" + idUser;
										}
									})
						 </script>'; // if $null is true: END
				else { // if $null is false: START
			   	$answer = (new ModelUsers)->mdlEditUser($table, $data);

			   	if($answer == "ok"){
					echo'<script>
					swal({
						  type: "success",
						  title: "User information has been successfully updated!",
						  showConfirmButton: true,
						  confirmButtonText: "OK"
						  }).then(function(result){
							if (result.value) {
							  window.location = "useradd";
							}
						})
					</script>';
				} // if $answer returns okay: END
			} // if $null is false: END
			// F4B Error Trapping: END
		} // if client name is set: END
	} // F4 ctrEditUser: END

	// F5 ctrDeleteUser: START
	static public function ctrDeleteUser(){
		if(isset($_GET["idUser"])){ // if index is set: START
			$table ="authentication";
			$data = $_GET["idUser"];
			$answer = (new ModelUsers)->mdlDeleteUser($table, $data);
			if($answer == "ok"){ // if answer returns "ok": START
				echo'<script>
				swal({
					  type: "success",
					  title: "User has been successfully deleted!",
					  showConfirmButton: true,
					  confirmButtonText: "OK"
					  }).then(function(result){
								if (result.value) {
								window.location = "users";
								}
							})
				</script>';
			} // if answer returns "ok":
		} // if index is set: END
	} // F5 ctrDeleteUser: END

	// F6 ctrFetchRecord: START
	// static public function ctrFetchRecord(){
	// 	$client = (new ModelAuthentication)->mdlFetchRecords();
	// 	return $client;
	//} // F6 ctrFetchRecord: END
} // ControllerAuthentication: END
