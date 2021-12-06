<?php
  include './SearchBar/dbh.php';
?>

<?php

date_default_timezone_set('Europe/Stockholm');

$Title = $_POST["Title"];
$Text = $_POST["Text"];
$Date = date('Y-m-d');
$Author = $_POST["Author"];

$sql = "INSERT INTO forum (f_title, f_text, f_date, f_author) VALUES ('$Title', '$Text', '$Date', '$Author')";

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>