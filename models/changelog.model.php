<?php

require_once "connection.php";

class ModelChangelog {
  static public function mdlGetId() {
		$pdo = (new Connection)->connect();
		$stmt = $pdo->prepare("SELECT MAX(id) FROM changelog");
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
    $id = $result['MAX(id)'] + 1;
		$clid = "CL" . str_pad($id, 4, "0", STR_PAD_LEFT);
		return $clid;

		$stmt->close();
		$stmt = null;
	}

  static public function mdlChangelog($data) {
    try {
			$pdo = (new Connection)->connect();
			$pdo->beginTransaction();
      $stmt = $pdo->prepare("INSERT INTO changelog(transacid, description, logtime) VALUES (:transacid, :description, :logtime)");
      $stmt->bindParam(":transacid", $data["transacid"], PDO::PARAM_STR);
      $stmt->bindParam(":description", $data["description"], PDO::PARAM_STR);
      $stmt->bindParam(":logtime", $data["logtime"], PDO::PARAM_STR);
      $stmt->execute();
			$pdo->commit();
			//end transaction
			return "ok";
		} catch (PDOException $exception) {
			$pdo->rollBack();
			return "error";
		}
		$stmt->close();
		$stmt = null;
  }

}
