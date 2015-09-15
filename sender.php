<?php
$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$mesaj=$_POST['ceva'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coafor";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_errno) {
    echo "Esuare in conexiune la MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
$interogare="insert into mesaje (nume,prenume,mesaj) values('$nume','$prenume','$mesaj')";
$result = $conn->query($interogare);
if (!$interogare)
	 echo "false";
 
$conn->close();

?>
