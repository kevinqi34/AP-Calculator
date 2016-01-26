<?php

echo <<<HEREDOC
<div id="navbar">
 <div id="wrapper">

 <a href="../"><img src="../logo.png" alt="Logo"></a>
HEREDOC;



/*
 if ($_SESSION['uid'] ) {
	                if ($_SESSION['pid']) {
	                   echo '<a href="">' . $_SESSION["uid"] . '</a>';
		                echo '<a id= "signup" href="../usr/logout.php">Log off</a>' ;
	                    }  else {
	         			      echo '<a href="../usr/profile.php">Profile</a>';
							      echo '<a id="signup" href="../usr/logout.php" >Log off</a>' ;
	                    }

		       }	else {
	           echo '<a href="../usr/signup.php">Sign up</a>';
	           echo '<a href="../usr/login.php">Log in</a>';

	           }
   */


 echo <<<HEREDOC
 </div>
</div>


HEREDOC;




?>
