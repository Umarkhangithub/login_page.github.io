<?php
      #Database Connection stablish
      $dbhost= "localhost";
      $dbuser= "root";
      $dbpass= "9628787975";
      $dbname= "login";
      


      $connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
      if(mysqli_connect_errno())
      {
        die("Database Connection Failed...!  " . mysqli_connect_error() . mysqli_connect_errno());
      }
      

    
?>