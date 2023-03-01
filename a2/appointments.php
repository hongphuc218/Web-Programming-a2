<?php require_once("fragment/head.php");?>
<link rel="stylesheet" href="style/appointments_style.css">
<title>Appointments Page</title>
</head>
<?php require_once("fragment/header.php");?>
<nav>
<ul>
    <li><a href="logout.php">LOG OUT</a></li>
    <li><a href="add_user.php">ADD USER</a></li>
</ul>
</nav>
<?php require_once("tools/login_tools.php");
    if(!$_SESSION['user']) {
      header("Location: login.php");  
    }?>
<main>
  <h1>Welcome <?php echo $_SESSION['user'];?></h1>
<table>
  <tr>
      <td>No.</td>
      <td>Patient ID</td>
      <td>Date</td>
      <td>Time</td>
      <td>Time 2</td>
      <td>Time 3</td>
      <td>Reason</td>
  </tr>
<?php
  $stream = fopen("appointments.txt", "r");
  while (($row = fgets($stream)) !== false) {
    echo "<tr>";
    $col = explode(",", $row);
    foreach ($col as $c) { echo "<td>$c</td>"; }
    echo "</tr>";
  }

  fclose($stream);
?>
</table>
</main>
<footer>
    <ul>
        <li><a href="index.php">HOME</a></li>
    </ul>
<?php require_once("fragment/footer.php");?>