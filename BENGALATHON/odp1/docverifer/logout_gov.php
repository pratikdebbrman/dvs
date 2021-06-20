<?php
   session_start();
   unset($_SESSION["docid"]);
   unset($_SESSION["password"]);
   
   #echo 'You have cleaned session';
   header('Refresh: 2; URL = \BENGALATHON\odp1\index_gov.php');
?>