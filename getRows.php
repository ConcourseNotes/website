<?php
	session_start();
	?>
<style>
    <?php include './styles.css'; ?>
</style>
<?php
	require('./connect.php');
	
	$loggedIn = false;
	$id = 0;
	$sql = "SELECT * FROM user";
	$statement = $conn -> query( $sql );

	if($loggedIn == false){
		echo "<form method='POST' action='getRows.php'>
		<h2>Login</h2>
		<label for='inUsername'>Username</label>
		<input type='text' id='inUsername' name='username' placeholder='Username' required>
		<label for='inPassword'>Password</label>
		<input type='password' id='inPassword' name='password' placeholder='Password' required>
		<input type='submit' value='Login'>
		</form>";
	}
	$results = $statement->fetchAll();  
	if(isset($_POST['username'])){
		foreach($results as $row){
			echo $_POST['username'];
			if($_POST['username'] == $row['username'] && $_POST['password'] == $row['password']){
				$loggedIn = true;
				$id = $row['userID'];
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['firstName'] = $row['firstName'];
				$_SESSION['lastName'] = $row['lastName'];
				$_SESSION['email'] = $email;
				echo $_SESSION['firstName'];
				
				break;
			}
		}
		if($loggedIn == false){
			echo "<p>Login Failed</p>";
		}
	}

	if($loggedIn == true){
		
		foreach($results as $row){
			
			if($id == $row['userID']){
				$_SESSION['loggedIn'] = 1;
				$_SESSION['userID'] = $id;
				echo "YEAA";
				echo $_SESSION['loggedIn'];
				header("Location: index.php");
			}
		}
	}
?>