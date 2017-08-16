<?php
	try {
		$con = new PDO("mysql:host=localhost; dbname=sinpGames", "root", "root");
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>