



  <?php  //Start the Session
	session_start();
	 require('./connect.php');
	//3. If the form is submitted or not.
	//3.1 If the form is submitted
	if (isset($_POST['username']) and isset($_POST['password'])){
		//3.1.1 Assigning posted values to variables.
		$username = $_POST['username'];
		$password = $_POST['password'];
		//3.1.2 Checking the values are existing in the database or not
		$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
		 
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$rows = mysqli_fetch_all($result);
		$count = mysqli_num_rows($result);
		//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
		if ($count == 1){
			$_SESSION['username'] = $username;
		}
		if($result){
			$_SESSION['username'] = $username;

			//header('Location: index.php');
		} else{
		//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
			$fmsg = "Invalid Login Credentials.";
		}
	}
	//3.1.4 if the user is logged in Greets the user with message
	if (isset($_SESSION['username'])){
		$username = $_SESSION['username'];/*
		
		echo "Hello " . $username . "
		";
		
		echo "<a href='logout.php'>Logout</a>";*/
		 
	} else{
	if(isset($_POST['username']) and isset($_POST['password'])){
		echo "<p>Incorrect Username or Password</p>";
	}
	 echo "<form class='form-signin' method='POST' action='login.php'>
        <h2 class='form-signin-heading'>Please Login</h2>
        <div class='input-group'>
	  <span class='input-group-addon' id='basic-addon1'>@</span>
	  <input type='text' name='username' class='form-control' placeholder='Username' required>
	</div>
        <label for='inputPassword' class='sr-only'>Password</label>
        <input type='password' name='password' id='inputPassword' class='form-control' placeholder='Password' required>
        <input type='submit' value='Login'>
        <a class='btn btn-lg btn-primary btn-block' href='register.php'>Register</a>
      </form>";
	}
	?>
	
	
	
	
  