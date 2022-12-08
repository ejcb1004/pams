<?php

require_once "connection.php";

class ModelPets {
	private $pdo;
	private $stmt;
	protected $result;

	public function mdlGetId() {
		$this->pdo = (new Connection)->connect();
		$this->stmt = $this->pdo->prepare("SELECT MAX(id) FROM pets");
		$this->stmt->execute();
		$this->result = $this->stmt->fetch(PDO::FETCH_ASSOC);
		$id = $this->result['MAX(id)'] + 1;
		return $id;
		$this->stmt->close();
		$this->stmt = null;
	}

	public function mdlAddPet($table, $data){
		try {
			$this->pdo = (new Connection)->connect();
			$this->pdo->beginTransaction();
			//add pet
			$this->stmt = $this->pdo->prepare(
				"INSERT INTO $table(petid, isadopted, pname, species, breed, sex, acqdate, isreserved)
				VALUES (:petid, :isadopted, :pname, :species, :breed, :sex, :acqdate, :isreserved)"
			);
			$this->stmt->bindParam(":petid", $data["petid"], PDO::PARAM_STR);
			$this->stmt->bindParam(":isadopted", $data["isadopted"], PDO::PARAM_INT);
			$this->stmt->bindParam(":pname", $data["pname"], PDO::PARAM_STR);
			$this->stmt->bindParam(":species", $data["species"], PDO::PARAM_STR);
			$this->stmt->bindParam(":breed", $data["breed"], PDO::PARAM_STR);
			$this->stmt->bindParam(":sex", $data["sex"], PDO::PARAM_INT);
			$this->stmt->bindParam(":acqdate", $data["acqdate"], PDO::PARAM_STR);
			$this->stmt->bindParam(":isreserved", $data["isreserved"], PDO::PARAM_INT);
			$this->stmt->execute();
			$this->pdo->commit();
			//end transaction
			return "ok";
		} catch (PDOException $exception) {
			$this->pdo->rollBack();
			return "error";
		}
		$this->stmt->close();
		$this->stmt = null;
	}

	public function mdlShowPets(){
		$this->pdo = (new Connection)->connect();
		$this->stmt = $this->pdo->prepare("SELECT * FROM pets ORDER BY pname");
		$this->stmt -> execute();
		return $this->stmt -> fetchAll();
		$this->stmt -> close();
		$this->stmt = null;
	}

	public function mdlEditPet($table, $data){
		try {
			$this->pdo = (new Connection)->connect();
			$this->pdo->beginTransaction();
			$this->stmt = $this->pdo->prepare("UPDATE $table SET petid = :petid, isadopted = :isadopted, pname = :pname, species = :species, breed = :breed, sex = :sex, acqdate = :acqdate, isreserved = :isreserved WHERE id = :id");

			$this->stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);
			$this->stmt->bindParam(":petid", $data["petid"], PDO::PARAM_STR);
			$this->stmt->bindParam(":isadopted", $data["isadopted"], PDO::PARAM_INT);
			$this->stmt->bindParam(":pname", $data["pname"], PDO::PARAM_STR);
			$this->stmt->bindParam(":species", $data["species"], PDO::PARAM_STR);
			$this->stmt->bindParam(":breed", $data["breed"], PDO::PARAM_STR);
			$this->stmt->bindParam(":sex", $data["sex"], PDO::PARAM_INT);
			$this->stmt->bindParam(":acqdate", $data["acqdate"], PDO::PARAM_STR);
			$this->stmt->bindParam(":isreserved", $data["isreserved"], PDO::PARAM_INT);

			$this->stmt->execute();
			$this->pdo->commit();
			return "ok";
		} catch (PDOException $exception) {
			$this->pdo->rollBack();
			return "error";
		}
		$this->stmt->close();
		$this->stmt = null;
	}

	public function mdlDeletePet($table, $data){
		try {
			$this->pdo = (new Connection)->connect();
			$this->pdo->beginTransaction();
			$this->stmt = $this->pdo->prepare("DELETE FROM $table WHERE id = :id");
			$this->stmt -> bindParam(":id", $data["id"], PDO::PARAM_INT);

			$this->stmt->execute();
			$this->pdo->commit();
			return "ok";
		} catch (PDOException $exception) {
			$this->pdo->rollBack();
			return "error";
		}
		$this->stmt->close();
		$this->stmt = null;
	}
}
