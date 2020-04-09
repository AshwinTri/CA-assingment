<?php
   $host = "localhost";
   $username = "root";
   $password = "123456";
   $dbname = "CA";
   $conn = mysqli_connect($host,$username,$password,$dbname);
   if($conn){
       echo "";
   }else{
       die("Connection Failed :". mysqli_connect_error());
   }
?>