<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
#body {
    height: auto;
    width: 1000px;
    margin-right: auto;
    margin-left: auto;
	margin-top: 50px;
	margin-bottom: auto;
}
#header {
    float: left;
    height: 50px;
    width: 980px;
	background: #AD0002;
	padding: 10px;
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
	color: aliceblue;
	font-size: 20px;
	}
#logo {
    float: left;
    height: 300px;
    width: 30%;
	background: #DFDBDB;
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
	color: black;
	font-size: 20px;
}
#video {
    float: left;
    height: 300px;
    width: 682px;
	background: #DFDBDB
}
#antrian {
    float: left;
    height: auto;
    width: 100%;
}
#isiantri {
    float: left;
    height: 190px;
    padding: 10px;
    width: 19.6%;
    border: 1px dashed #030303;
    background-color: green;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style type="text/css">
body {
    background-color: #372828;
}
</style>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>
<div id="body">
  <div id="header"><marquee>SISTEM ANTRIAN KECAMATAN BINAWIDYA PEKANBARU</marquee></div>
  <div id="logo"><center>
    <br><img src="logo.png" width="118" height="150" alt=""/>
	<br> <br> Kecamatan BINAWIDYA <br>Pekanbaru
  </center></div>
  <div id="video">
      <iframe width="100%" height="300" src="https://www.youtube.com/embed/9xg6Yk4Vo80" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	  </div>
  <div id="antrian">
     <div id="isiantri"><div id="link_wrapper4"></div></div>
	 <div id="isiantri"><div id="link_wrapper5"></div></div>
     <div id="isiantri"><div id="link_wrapper"></div></div>
	 <div id="isiantri"><div id="link_wrapper2"></div></div>
	 <div id="isiantri"><div id="link_wrapper3"></div></div>
	 <div id="isiantri"><div id="link_wrapper8"></div></div>
	 <div id="isiantri"><div id=""></div></div>
	 <div id="isiantri"><div id=""></div></div>
	 <div id="isiantri"><div id=""></div></div>
	 <div id="isiantri"><div id=""></div></div>
	 
	 
  </div>
  
  
  
</div>
<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "server.php", true);
  xhttp.send();
}
setInterval(function(){
	loadXMLDoc();
	// 1sec
},1000);

window.onload = loadXMLDoc;
</script>

<script>
function loadXMLDoc2() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper2").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "server2.php", true);
  xhttp.send();
}
setInterval(function(){
	loadXMLDoc2();
	// 1sec
},1000);

window.onload = loadXMLDoc2;
</script>

<script>
function loadXMLDoc3() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper3").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "server3.php", true);
  xhttp.send();
}
setInterval(function(){
	loadXMLDoc3();
	// 1sec
},1000);

window.onload = loadXMLDoc3;
</script>
	
<script>
function loadXMLDoc4() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper4").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "server4.php", true);
  xhttp.send();
}
setInterval(function(){
	loadXMLDoc4();
	// 1sec
},1000);

window.onload = loadXMLDoc4;
</script>

<script>
function loadXMLDoc8() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper8").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "server8.php", true);
  xhttp.send();
}
setInterval(function(){
	loadXMLDoc8();
	// 1sec
},1000);

window.onload = loadXMLDoc5;
</script>

<script>
function loadXMLDoc5() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper5").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "server5.php", true);
  xhttp.send();
}
setInterval(function(){
	loadXMLDoc5();
	// 1sec
},1000);

window.onload = loadXMLDoc5;
</script>

<script type="text/javascript">
    window.onload = maxWindow;

    function maxWindow() {
        window.moveTo(0, 0);

        if (document.all) {
            top.window.resizeTo(screen.availWidth, screen.availHeight);
        }

        else if (document.layers || document.getElementById) {
            if (top.window.outerHeight < screen.availHeight || top.window.outerWidth < screen.availWidth) {
                top.window.outerHeight = screen.availHeight;
                top.window.outerWidth = screen.availWidth;
            }
        }
    }
</script> 
</body>
</html>
