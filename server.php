<?php


require  ('../../private/thewall_db.php');

	session_start();
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	// connect to database
	$db = mysqli_connect(HOST, USER, PASS, DB);



	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Gebruikersnaam is verplicht"); }
		if (empty($email)) { array_push($errors, "Email is verplicht"); }
		if (empty($password_1)) { array_push($errors, "Wachtwoord is verplicht"); }

		if ($password_1 != $password_2) {
			array_push($errors, "De twee wachtwoorden komen niet overeen");
		}

        $position = strpos($email, '@ma-web.nl');
        if (!$position){
            array_push($errors, "Sorry u kunt alleen een mailadres van het mediacollege gebruiken");

        }

        $user_check_query = "SELECT * FROM login_TheWall WHERE username='$username' OR email='$email' LIMIT 1";
        $result           = mysqli_query($db, $user_check_query);
        $user             = mysqli_fetch_assoc($result);
        if ($user) {
            if ($user['username'] === $username) {
                array_push($errors, "Deze gebruikersnaam is al in gebruik");
            }
            if ($user['email'] === $email) {
                array_push($errors, "Dit email is al in gebruik");
            }

        }



        // register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO login_TheWall (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "U bent nu ingelogd";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Gebruikersnaam is verplicht");
		}
		if (empty($password)) {
			array_push($errors, "Wachtwoord is verplicht");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM login_TheWall WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
                $_SESSION['success'] = "U bent nu ingelogd";
				header('location: index.php');
			}else {
				array_push($errors, "Verkeerde Gebruikersnaam/Wachtwoord combinatie");
			}
		}
	}

?>