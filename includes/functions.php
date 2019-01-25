<?php

	function redirect_to($new_location) {
	  header("Location: " . $new_location);
	  exit;
	}
	
	function mysql_prep($string) {
		global $connection;
		
		$escaped_string = mysqli_real_escape_string($connection, $string);
		return $escaped_string;
	}

	function attempt_login($username, $password) {
		$user = find_user_by_username($username);
		echo $password;
		echo "<br>";
		echo $user["password"];
		if($user) {
			//found admin, now check password
			if($password == $user["password"]) {
				// password matches
				return $user;
			} else {
				// password does not match
				return false;
			}
		} else {
			//admin not found
			return false;
		}
	}

	function find_user_by_username($username) {
		global $connection;
		
		$safe_username = mysqli_real_escape_string($connection, $username);
		
		$query  = "SELECT * ";
		$query .= "FROM users ";
		$query .= "WHERE email = '{$safe_username}' ";
		$query .= "LIMIT 1";
		$user_set = mysqli_query($connection, $query);
		confirm_query($user_set);
		if($user = mysqli_fetch_assoc($user_set)) {
			return $user;
		} else {
			return null;
		}
	}

	function is_email_unique($email) {
		global $connection;

		$safe_email = mysqli_real_escape_string($connection, $email);

		$query  = "SELECT email ";
		$query .= "FROM users ";
		$query .= "WHERE email = '{$safe_email}' ";
		$email_set = mysqli_query($connection, $query);
		confirm_query($email_set);
		$rowcount = mysqli_num_rows($email_set);
		if ($rowcount == 0) {
			return true;
		} else {
			return false;
		}
	}

	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
	}

	function logged_in() {
		return isset($_SESSION["user_id"]);
	}
	
	function confirm_logged_in() {
		if(!logged_in()) {
			redirect_to("login.php");
		}
	}
?>