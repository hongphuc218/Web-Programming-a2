<?php
session_start();
$username = $password = "";
$error = '';
$file = fopen('users.txt', 'r');
$usernames = array();
$passwords = array();

if (isset($_POST['admin_login'])) {
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    while (($data = fgetcsv($file)) !== FALSE) {
      array_push($usernames, $data[0]);
      array_unique($usernames);
      array_push($passwords, $data[1]);
      array_unique($passwords);
    }
    fclose($file);
    print($password);
    if (in_array($username, $usernames)) {
      $x = array_search($username, $usernames);
      if (strcmp($password, $passwords[$x]) == 0) {
        $error = "";
        $_SESSION['user'] = $username;
        header('Location: ../a2/appointments.php');
        exit;
      }
      else {
        $error = "Invalid Password";
      }
    }
    else {
      $error = "Invalid username";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>