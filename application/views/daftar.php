<!DOCTYPE html>

<html>
<!-- Nama Anggota Kelompok :
1. Sita Fara Y
2. Fakhirah Bamahry
3. Eri Rahmawati -->
<head>
  <meta charset="utf-8">
  <title>Daftar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <nav>
    <a href="<?php echo base_url();?>">Login</a>
    <a href="<?php echo base_url('index.php/welcome/daftar/'); ?>">Daftar</a>
  </nav>
  <p style = "color : white; text-align : center; font-size : 50px; ">Silahkan Isi Data Diri Anda !</p>
 
  <center>
    <div id="Daftar">
      <h1>Daftar</h1>
      <hr>
      <form id="Daftar" action="<?php echo base_url('index.php/daftar/daftar/');?>" method="post"> 
        <input type="text" class="inputa" name="nama" value="" placeholder="Nama"> 
        <input type="text" class="inputa" name="email" value="" placeholder="Email"> 
        <input type="password" class="inputa" name="pass" value="" placeholder="Password"> 
        <input type="password" class="inputa" name="kpass" value="" placeholder=" Konfirmasi Password"> 
        <input type="submit" class="wed"name="" value="Create"> 
     </form>
    </div>
  </center>
</body>

<style media="screen">
    body {
      background-image: url("../../../retina_Purin.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
  
    #Daftar {
      background: white;
      width: 50%;
      height: 100x;
      margin-top: 10px;
    }
  
    @font-face {
      src: url('font/Product Sans Regular.ttf');
      font-family: Product Sans;
    }
  
    @font-face {
      src: url('font/OpenSans-Light.ttf');
      font-family: OpenSans-Light;
    }
  
    #Daftar form {
      margin-top: 15px;
      float: center;
      padding: 50px;
    }
  
    #Daftar .inputa {
      width: 90%;
      margin-top: 1px;
      height: 50px;
      border: 0px;
      border-bottom: 1px solid #6a82fb;
      font-size: 16px;
      font-family: OpenSans-Light;
    }
  
    #Daftar .wed {
      margin-top: 40px;
      width: 45%;
      height: 40px;
      background: #6a82fb;
      border: none;
      color: white;
      font-family: product sans;
      font-size: 20px;
      border-radius: 5px;
    }
  
    #Daftar h1 {
      text-align: center;
      padding: 5px;
      color: #6a82fb;
      font-family: Product Sans;
    }
  
    #Daftar hr {
      width: 50%;
      height: 4px;
      border: none;
      background: #6a82fb;
    }
    
  </style>
  
</html>
