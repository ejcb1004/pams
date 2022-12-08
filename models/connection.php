<?php

class Connection {
	private $servername = "localhost";
	private $username = "teamw1011";
	private $password = "%D0ubL3U0414_";
	private $database = "pams";
	protected $link;

	public function connect() {
		try {
			$this->link = new PDO(
				"mysql:host=$this->servername;dbname=$this->database",
			 	$this->username, $this->password,
			);
			$this->link -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->link -> exec("set names utf8");
		} catch (PDOException $e) {
			echo "Connection error: " . $e->getMessage();
		}
		return $this->link;
	}
}

?>
