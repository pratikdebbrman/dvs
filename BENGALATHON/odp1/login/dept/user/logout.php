<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   #echo 'You have cleaned session';
   header('Refresh: 2; URL = \BENGALATHON\odp1\index_can.php');
?>