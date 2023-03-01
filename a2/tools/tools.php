<?php
session_start();
$appointments = "appointments.txt";
$id = $date = $appointment = $successful = "";
$time = array();
$idErr = $dateErr = $timeErr = $appointmentErr = "";
$sum = 0; $rem = 0;
$alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$today = date("Y-m-d");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST["id"];
    $substr = substr($string, -1);
    $alpPos = strpos($alphabet, $substr) + 1;
    $num = preg_replace("/[^0-9]{1,4}/", '', $string);
    for ($i = 0; $i <=strlen($num); $i++) {
        $rem = $num % 10;
        $sum = $sum + $rem;
        $num = $num/10;
    }
    $mod = $sum % 26;
    if (empty($_POST["id"])) {
        $idErr = "ID is required";
    } 
    elseif (!preg_match('/^[A-Z]{2}[0-9]{1,10}[A-Z]$/', $_POST["id"])){
        $idErr = "Invalid ID Pattern";
    }
    elseif ($alpPos != $mod) {
        $idErr = "ID does not exist";
    } 
    else {
        $id = test_input($_POST["id"]);
    }

    if (empty($_POST["date"])) {
        $dateErr = "Date is required";
    }
    elseif ($_POST["date"] < $today) {
        $dateErr = "The date must be today or after";
    }
    else {
        $date_input = test_input($_POST["date"]);
        //Change date format
        //l: A full textual representation of the day of the week (Sunday through Saturday)
        //d: Day of the month (1 to 31)
        //S: ordinal suffix for the day of the month
        //F: textual representation of a month
        //Y: numeric representation of a year
        
        $d = strtotime($date_input);
        $date = date("l dS F Y", $d);
    }
        
    if (empty($_POST["time"])) {
        $timeErr = "Time is required";
    } 
    else {
        foreach ($_POST["time"] as $value) {
            array_push($time, $value);
        }
        for ($x = sizeof($time); $x < 3; $x++) {
            array_push($time, '');
        }
    }

    if (empty($_POST["reason"])) {
        $appointmentErr = "You need to pick a reason";
    } else {
        $appointment = test_input($_POST["reason"]);
    }

    if ($idErr == "" && $dateErr == "" && $timeErr == "" && $appointmentErr == "") {
        $file_open = fopen($appointments, "a");
        $no_rows = count(file($appointments)) + 1;
        $form_data = array(
            'sr_no' => $no_rows,
            'id'    => $id,
            'date'  => $date,
            'time'  => implode(",",$time),
            'appointment' => $appointment
        );
        fputcsv($file_open, $form_data);
        fclose($appointments);
        $successful = "You form is submitted. We will contact you as soon as possible. Thank you for using our services!";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>