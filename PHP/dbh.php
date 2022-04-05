<?php

      //Database information
      $server = "localhost";
      $username = "root";
      $password = "";
      $dbname = "DBTerminTea";

      //Connects to the database with information given above.
      $conn = mysqli_connect($server, $username, $password, $dbname);

      //Starts the session for 
      session_start();

      ?>