<?php
  include './SearchBar/dbh.php';
?>

<head> 
<link rel="stylesheet" href="../css/stylesForum.css" >
</head>

<?php

date_default_timezone_set('Europe/Stockholm');

$Title = $_POST["Title"];
$Text = $_POST["Text"];
$Date = date('Y-m-d');
$Author = $_POST["Author"];

$sql = "INSERT INTO forum (f_title, f_text, f_date, f_author) VALUES ('$Title', '$Text', '$Date', '$Author')";


if ($conn->query($sql) === TRUE) {
  echo "<h1>New record created successfully</h1>
        <a id='beez' href='../index.php'>Home</a>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>