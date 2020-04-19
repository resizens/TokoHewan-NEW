<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:halaman.php'); }
?>
<title>register</title>
<body style=background-color:pink>
<div align='center'>
  <form action="prosesregister.php" method="post">
  <table>
  <tbody>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <p1 style="font-size: 28px; font-family: initial;"><b>Zn PetShop</b></p1></center>
  <tr><td colspan="2" align="center"><p style="font-size:70px; font-family: 'Lobster', cursive;">Buat Akun Baru</p></td></tr>
  <tr><td style="font-size:21px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><b>Username</b></td><td style="font-size:25px;">: <input name="username" type="text"></td></tr>
  <tr><td style="font-size:21px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><b>Password</b></td><td style="font-size:25px;">: <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="center"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center" style="font-size:20px;"><b>Sudah Punya akun ? </b><a href="login.php"><b>Login</b></a></td></tr>
</tbody>
  </table>
  </form>
</div>