<?php	
	session_start();
?>

<style>
    <?php include './styles.css'; ?>
</style>

<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
	$email = $_POST['email'];
        $password = $_POST['password'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
 
        $query = "INSERT INTO `user` (username, password, email, active, firstName, lastName) VALUES ('$username', '$password', '$email', 0, '$firstName', '$lastName')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = $_POST['prevPage'];
	  	$_SESSION['username'] = $username;
		$_SESSION['email'] = $email;
		$_SESSION['firstName'] = $firstName;
		$_SESSION['lastName'] = $lastName;
		$_SESSION['loggedIn'] = 1;
		$message = "Hello";//"Hello, " . $username . "!\r\nYou created a ConcourseNotes accounts today under the name" . $firstName . " " . $lastName . "\r\nThanks,\r\nConcourseNotes Team";

		$message = wordwrap($message, 70, "\r\n");

		mail($email, 'Verify Your Account', $message);

	   header("Location: index.php");
        } else{
            	$fmsg = "User Registration Failed";
		if (isset($_POST['username']) and isset($_POST['password'])){
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			echo $username . ", " . $password;
			$quer = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
			$resul = mysqli_query($connection, $quer) or die(mysqli_error($connection));
			if($resul){
				$fmsg = "Username Already Taken";
			}
		}
        }
    }
    ?>
<div class="container">
      <form class="form-signin" method="POST" action='register.php'>
	   <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
	  
	  
	</div>
	<label for="usr" class="sr-only">Username</label>
	<input type="text" name="username" id="usr" class="form-control" placeholder="Username" required>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        
	<label for="inputfName" class="sr-only">First Name</label>
        <input type="text" name="firstName" id="inputfName" class="form-control" placeholder="First Name" required>

	<label for="inputlName" class="sr-only">Last Name</label>
        <input type="text" name="lastName" id="inputlName" class="form-control" placeholder="Last Name" required>
	
	<label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>


        <input type="submit" value="Register">

        <a class="btn btn-lg btn-primary btn-block" href="getRows.php">Login</a>
      </form>
</div>