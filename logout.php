
<?php
$_POST['loggedIn'] = 0;
echo "<a ref='loginpage.html'></a>";
session_start();
session_destroy();
header('Location: index.php');

?>