<?php
	
	function login($un, $pw){
		require_once('connect.php');

		$check_exists_query = "SELECT COUNT(*) FROM tbl_user WHERE user_name = :username";
		
		// $user_set = $pdo->query($check_exists_query);

		$user_set = $pdo->prepare($check_exists_query);
		$user_set->execute(
			array( ':username' => $un)
		);
		if($user_set->fetchColumn()>0){
			echo "User Exists!";
		}else{
			echo "NOPE";
		}

	
		return 'Login successful';
	}

?>