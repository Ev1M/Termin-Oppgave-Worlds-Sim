<?php

include '../dbh.php';
 

$Title = $_POST["Title"];
$Text = $_POST["Text"];
$Author = $_SESSION["userUid"];

$Title = mysqli_real_escape_string($conn, $Title);
$Text = mysqli_real_escape_string($conn, $Text);
$Author = mysqli_real_escape_string($conn, $Author);

$sql = "INSERT INTO help (h_title, h_text, h_authour) VALUES ('$Title', '$Text', '$Author')";


if ($conn->query($sql) === TRUE) {
 header("location: ../../index.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>