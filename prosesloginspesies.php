<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['pass'];
   $cekuser = mysql_query("SELECT * FROM adminspesies WHERE username = '$username'");
   $hasil = mysql_fetch_array($cekuser);
   if(mysql_num_rows($cekuser) == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='loginspesies.php'>Back</a></div>";
   } else {
     if($password <> $hasil['pass']) {
       echo "<div align='center'>Password salah! <a href='loginspesies.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:berandaspesies.php');
     }
   }
?>
