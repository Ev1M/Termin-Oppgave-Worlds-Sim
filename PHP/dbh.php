<?php

      //Database information
      $server = "10.2.2.240";
      $username = "root";
      $password = "";
      $dbname = "DBTerminTea";

      //Connects to the database with information given above.
      $conn = mysqli_connect($server, $username, $password, $dbname);

      //Starts the session for 
      session_start();

      ?>