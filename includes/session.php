<?php
	session_start();
	
	function message() {
		if(isset($_SESSION["message"])) {
			$output = "<div class=\"message\">";
			$output .= htmlentities($_SESSION["message"]);
			$_SESSION["message"] = null;
			
			$output .= "</div>";
			return $output;
		}
	}
	
	function errors() {
		if(isset($_SESSION["errors"])) {
			$errors = $_SESSION["errors"];
			$_SESSION["errors"] = null;

			return $errors;
		}
	}
?>



