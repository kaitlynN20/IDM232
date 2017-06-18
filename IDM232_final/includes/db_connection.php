<?php

  define('DB_SERVER', 'localhost');
  define('DB_USER', 'kaitlyq7_USER');
  define('DB_PASS', 'L^N5CN5Prc1&');
  define('DB_NAME', 'kaitlyq7_IDM232_final');

  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

  if (mysqli_connect_errno()) {
    die ('Database connection failed: ' .
        mysqli_connect_error() .
        ' )' . mysqli_connect_errno() . ')'
    );
  }
?>
