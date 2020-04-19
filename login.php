<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:halaman.php'); }
   require_once("koneksi.php");
?>
<title>Form Login</title>
<body style=background-color:pink;>
<div align='center'>
  <form action="proseslogin.php" method="post">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <p3 style="font-size:70px; font-family: 'Lobster', cursive;">Masuk</p3>
  <table>
  <tbody> 
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <tr><td  style="font-size:21px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><b>Username</b></td><td style="font-size:25px;">: <input name="username" type="text"></td></tr>
  <tr><td  style="font-size:21px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><b>Password</b></td><td style="font-size:25px;">: <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="center"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center" style="font-size:20px;">Belum Punya akun ? <a href="register.php"><b>Daftar</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>