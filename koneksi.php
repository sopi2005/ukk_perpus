




<?php 
 session_start();
 $koneksi = mysqli_connect("localhost","root","","ukk_perpus");
  
 // Check connection
 if (mysqli_connect_errno()){
  echo "Koneksi database gagal : " . mysqli_connect_error();
 }
  
 ?>