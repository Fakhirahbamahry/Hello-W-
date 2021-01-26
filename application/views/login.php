<!DOCTYPE html>

<html>
<!-- Nama Anggota Kelompok :
1. Sita Fara Y
2. Fakhirah Bamahry
3. Eri Rahmawati -->
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('a.css')?>">
</head>

<body>
  <nav>
    <a href="<?php echo base_url();?>">Login</a>
    <a href="<?php echo base_url('index.php/welcome/daftar/'); ?>">Daftar</a>
  </nav>

  <p style = "color : white; text-align : center; font-size : 35px; ">Silahkan LogIn Terlebih Dahulu !</p>
  
  <center>
    <div id="backlogin">
      <h1>Login</h1>
      <hr>
      <form id="login" action="<?php echo base_url('index.php/login/login/');?>" method="post"> 
        <input type="text" class="inputa" name="user" value="" placeholder="Username"> 
        <input type="password" class="inputa" name="pass" value="" placeholder="Password"> 
        <input type="submit" class="wed"name="" value="Sign In"> 
     </form>
    </div>
  </center>
</body>
  
</html>
