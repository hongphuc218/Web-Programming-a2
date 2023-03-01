<?php
$uError = $pError = '';
$username = $password = $success = "";
$usernames = array();
$file = fopen('users.txt', 'r+');


if (isset($_POST['add_user'])) {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST['password']);
    while (($data = fgetcsv($file)) !== FALSE) {
        array_push($usernames, $data[0]);
    }

    if (empty($_POST['username'])) {
        $uError = 'Username required';
    }
    elseif (in_array($username, $usernames)) {
        $uError = 'This username already exists';
    }

    if (empty($_POST['password'])) {
        $pError = 'Password required';
    }
    
    if ($uError == '' && $pError == '') {
        $form_data = array($username, $password);
        fputcsv($file, $form_data);
        $success = 'User added';
    }
    fclose($file);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>