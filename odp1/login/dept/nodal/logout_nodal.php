<?php
   session_start();
   #echo $_SESSION["username"];

   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   #echo $_SESSION["username"];
   #echo 'You have cleaned session';
   header('Refresh: 2; URL = \BENGALATHON\odp1\index_gov.php');
?>