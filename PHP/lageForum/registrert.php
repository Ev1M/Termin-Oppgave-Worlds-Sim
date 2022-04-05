<?php
//includes the database and font
  include '../dbh.php';
  include '../font.php';
?>

<?php

date_default_timezone_set('Europe/Stockholm');

$Title = $_POST["Title"];
$Text = $_POST["Text"];
$Date = date('Y-m-d');
$Author = $_SESSION["userUid"];

$Title = mysqli_real_escape_string($conn, $Title);
$Text = mysqli_real_escape_string($conn, $Text);
$Author = mysqli_real_escape_string($conn, $Author);

$sql = "INSERT INTO forum (f_title, f_text, f_date, f_authour) VALUES ('$Title', '$Text', '$Date', '$Author')";


if ($conn->query($sql) === TRUE) {
 header("location: ../../index.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>