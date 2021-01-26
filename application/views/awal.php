<!DOCTYPE html>

    <html>
<!-- Nama Anggota Kelompok :
1. Sita Fara Y
2. Fakhirah Bamahry
3. Eri Rahmawati -->
<head>
    <title>Selamat Datang</title>
</head>
<body>
    <div class="title">
        <h1>Selamat Datang di Hello(W) Pudding</h1>
    </div>
    <div class="button">
        <a href="<?php echo base_url('index.php/welcome/'); ?>" class="btn">Get Our Product</a>
</body>
<style media="screen">
    body{
      background-image: url("retina_Purin.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }

    .title h1{
        color: white;
        font-size: 66px;
        padding: 140px;
        text-decoration: none;
    }

    .button{
        position: absolute;
        top: 65%;
        left: 50%;
        color: white;
        transform: translate(-50%, -50%);
    }

    .btn{
        border: 1px solid black;
        padding: 10px 20px;
        color: black;
        text-decoration: none;
        transition: 0.6s;
    }

    .btn:hover{
        background-color: white;
        color: whitesmoke;
    }
</style>
</html>

