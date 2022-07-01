<?php
session_start();

// initializing variables
$IC = "";
$Nama    = "";
$Nombor_Telefon  = "";
$Password   = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'systempertandinganmural');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $IC = mysqli_real_escape_string($db, $_POST['IC']);
  $Nama = mysqli_real_escape_string($db, $_POST['Nama']);
  $Nombor_Telefon = mysqli_real_escape_string($db, $_POST['Nombor_Telefon']);
  $Password = mysqli_real_escape_string($db, $_POST['Password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($IC)) { array_push($errors, "IC diperlukan"); }
  if (empty($Nama)) { array_push($errors, "Nama diperlukan"); }
  if (empty($Nombor_Telefon)) { array_push($errors, "Nombor Telefon diperlukan"); }
  if (empty($Password)) { array_push($errors, "Password diperlukan"); }

  // first check the database to make sure 
  // a user does not already exist with the same IC and/or Nama
  $user_check_query = "SELECT * FROM hakim WHERE IC='$IC' OR Nama='$Nama' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['IC'] === $IC) {
      array_push($errors, "IC already exists");
    }

    if ($user['Nama'] === $Nama) {
      array_push($errors, "Nama already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO hakim (IC, Nama,Nombor_Telefon, Password) 
  			  VALUES('$IC', '$Nama','$Nombor_Telefon', '$Password')";
  	mysqli_query($db, $query);
  	$_SESSION['IC'] = $IC;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: LOGIN-HAKIM.php');
  }
}

// ... 
 // LOGIN USER
if (isset($_POST['login_user'])) {
    $IC = mysqli_real_escape_string($db, $_POST['IC']);
    $Password = mysqli_real_escape_string($db, $_POST['Password']);
  
    if (empty($IC)) {
        array_push($errors, "IC is required");
    }
    if (empty($Password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $query = "SELECT * FROM hakim WHERE IC='$IC' AND Password='$Password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['IC'] = $IC;
          $_SESSION['success'] = "You are now logged in";
          header('location: HOME-HAKIM.php');
        }else {
            array_push($errors, "Wrong IC/password combination");
        }
    }
  }
  
  ?>