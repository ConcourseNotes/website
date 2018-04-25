<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="default8.css">
		<link rel="stylesheet" href="fonts.css">
    <meta charset="UTF-8">
    <title>Home - Concourse Notes</title>
  </head>
  
	
  
  
  
<body style="font-family:'Roboto';">
	
	<?php 
    		require('./connect.php');
		
    		if($_SESSION['loggedIn'] == 1){
       			echo "<div class='topbar'> <p class='uName'>" . $_SESSION['firstName'] . "</p><br><a href='logout.php'>Logout</a></div>";
			

    		} else {
			echo "<div class='topbar'><a href='getRows.php'>Login</a><br><a href='register.php'>Register</a></div>";
    		}
		


    	?>
	<div class="header">
			<h1>Website</h1>
		</div>

		<div class="topnav">
			<a href="index.php">Home</a>
			
			<a href="">Generate</a>
			
		</div>
		<div class="row">
			<div class="column">
				<h2>Home</h2>
				
			</div>
			<div class="side">
				
				
			</div>
			
			<div class="column">
				Lorem ipsum dolor sit amet, mei adolescens comprehensam at, per ut altera virtute epicurei. Usu an purto erroribus. Te exerci eloquentiam vel. Ex vide dolorum dissentiunt quo, quo ex iudico commodo aliquip.

Vim ei habeo dicit munere, sumo movet dissentiunt ad mea, congue iudico ubique vim ne. Cibo natum solum usu ea, lorem equidem te sit. Cu mea quaestio praesent repudiare, ut mel ipsum quaeque torquatos, sit no altera vocent aliquip. Legere admodum salutatus id mea, pro et facete tritani, discere euismod consetetur eu has.

Cu mel lorem perfecto, id has solum appareat. Impedit facilisis eum no, illum accusam necessitatibus ex mea. No nam legere postulant intellegam, equidem noluisse usu eu, wisi mentitum at mel. Ne atomorum postulant sed, viris ridens discere ei eam. At est nihil fierent appareat, atqui principes an duo.

Sumo consul semper ius ut, mel et fugit explicari. Iriure viderer quo ei, no dicunt detracto recusabo eam. Eu consul tamquam pro. Ea vis phaedrum complectitur intellegebat. Mea eleifend disputando efficiantur no, ut vim quas quaerendum. Duo no novum eruditi.

Nam in erant assueverit. Ullum phaedrum mediocritatem id nam, qui atqui oporteat ad, ludus doctus laboramus vis no. Vis at amet interesset. Mel dicant prompta iracundia ut, discere laoreet vivendum mei cu. Ea est alii novum, usu nulla everti tibique in, ut consul scripta vis.
			</div>
			
		</div>
</body>
<html>