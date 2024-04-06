<?php
$loket=$_GET['loket'];
$nomor=$_GET['nomor'];
?>
<html><head>
  <title>HTML to API - event tickets</title>
  <link href="https://fonts.googleapis.com/css?family=Kreon:700|Audiowide&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
  <!-- <link rel="stylesheet" href="styles/main.css" media="screen" charset="utf-8"/> -->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="content-type" content="text-html; charset=utf-8">
<style>
  body {
    margin: 0;
    color: #872F67;
    font-family: "arial";
    font-weight: 150;
    font-size: 15px;
  }

  .container {
    width: 795px;
    margin: 0 auto;
  }

  section {
    position: relative;
    height: 280px;
    width: 100%;
    background-image: url(https://antrian.binawidya.co.id/online/Untitled%20design.png);
    background-repeat: no-repeat;
    background-size: 100% 280px;
    overflow: hidden;
  }
  section .left {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    float: left;
    width: 500px;
    padding: 35px 0 0 110px;
    text-align: center;
  }
  section .right {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    float: right;
    width: 110px;
    padding: 30px 30px 0 0;
  }
  section .event {
    margin-bottom: 30px;
    font-weight: 700;
    font-size: 1.6em;
    line-height: 35px;
    text-transform: uppercase;
  }
  section .title {
    margin-bottom: 20px;
    color: #4AB4C4;
    font-size: 4em;
    line-height: 72px;
  }
  section .info {
    font-size: 0.8em;
    text-transform: uppercase;
  }
  section .seats {
    margin-bottom: 15px;
    color: white;
    font-family: "Kreon", serif;
    font-size: 0.36em;
    text-align: center;
    text-transform: uppercase;
  }
  section .seats:last-child {
    margin-bottom: 0;
  }
  section .seats span {
    display: block;
    margin-bottom: 5px;
    padding: 10px 0;
    color: black;
    background: white;
    font-size: 2.777em;
  }
</style></head>



<body>
  <div class="container">
    <section>
      <div class="left">
        <div class="event"></div>
        <div class="title"></div>
        
      </div>
      <div class="right">
        <div class="seats"><span>LOKET <?=$loket?></span></div>
        <div class="seats"><span><?=$nomor?></span></div>
        
      </div>
    </section>
  </div>
<center><p>Harap Screenshoot Tiket! <a href="index.php"><button>Selesai</button></a></p></center>
</center>

</body></html>