<?php
  if(empty(session_start())){
 	session_start();
 } 
	echo $_SESSION['code'];
	?>