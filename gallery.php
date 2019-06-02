	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="styles/gallery.css">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/footer.css">
		<?php include('php/getHelp.php') ?>
    <script src="dropdown.js"></script>
    <style>
      i {
  border: solid white;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}

        .dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: blue;
  cursor: pointer;
}


.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}


.dropdown {
  margin-top:  20px;
  margin-left: 150px; 
  position: relative;
  display: inline-block;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown-content a:hover {
  background-color: #ddd
}

.show {
  display:block;
}
    </style>
	</head>
	
	<body>
<?php 
include 'header.php';
 ?>


  <div class="aj">
<p class="par">
  <b>
  Start searching for names of all models!
</b>
</p>

<form> 
<input type="text" onkeyup="help(this.value)" placeholder="Type..." class="formm">
</form>
<p class="sugg">
  Suggestions: 
  <span id="modelsName">
  </span>
</p>
</div>

	<form style="margin-left: 100px;margin-top: 120px;">
	<fieldset style="width: 95%"  >
<div class="background-color">	
<legend style="font-size: 30px;font-family: 'Open sans', sans-serif ">PHONES</legend>    
   <div class="row1212" style="margin-left: -10px">
<div class="column1212">
    <div class="container2">
     <img src="images/1004.jpg" alt="Avatar" class="image">
     
      <a href="images/1004.jpg">
      <div class="overlay">
       <div class="text1212">Samsung Galaxy J7 Prime</div>
      </div>
    </a>
    </div>
</div>


<div class="column1212">
     <div class="container2">
     <img src="images/1005.jpg" alt="Avatar" class="image">
      <a href="images/1005.jpg">
      <div class="overlay">
       <div class="text1212">Huawei Mate 20 Lite</div>
      </div>
    </a>
     </div>
</div>



<div class="column1212">    
     <div class="container2">
       <img src="images/1006.jpg" alt="Avatar" class="image">
       <a href="images/1006.jpg">
       <div class="overlay">
       <div class="text1212">Huawei U11 Eyes</div>
       </div>
     </a>
     </div>
</div>


<div class="column1212">
    <div class="container2">
     <img src="images/1007.jpg" alt="Avatar" class="image">
   <a href="images/1007.jpg">
      <div class="overlay">
       <div class="text1212">BlackBerry Motion</div>
      </div>
    </a>
    </div>
</div>


<div class="column1212">
    <div class="container2">
      
     <img src="images/1008.jpg" alt="Avatar" class="image">
      <a href="images/1008.jpg">
      <div class="overlay">
       <div class="text1212">LG V30</div>
      </div>
    </a>
    </div>
</div>


<div class="column1212">
    <div class="container2">
     
     <img src="images/1009.jpg" alt="Avatar" class="image">
      <a href="images/1009.jpg">
      <div class="overlay">
       <div class="text1212">Sony Xperia XZ Premium</div>
      </div>
    </a>
    </div>
</div>


<div class="column1212">
    <div class="container2">
      
     <img src="images/1010.jpg" alt="Avatar" class="image">
      <a href="images/1010.jpg">
      <div class="overlay">
       <div class="text1212">Nokia 3310</div>
      </div>
    </a>
    </div>
</div>


<div class="column1212">
     <div class="container2">
     <img src="images/1011.jpg" alt="Avatar" class="image">
      <a href="images/1011.jpg">
      <div class="overlay">
       <div class="text1212">Iphone 6/6s</div>
      </div>
    </a>
     </div>
</div>


<div class="column1212">    
     <div class="container2">
       <img src="images/1012.jpg" alt="Avatar" class="image">
       <a href="images/1012">
       <div class="overlay">
       <div class="text1212">Iphone XR</div>
       </div>
     </a>
     </div>
</div>

</div>
</div>

</fieldset>
</form>



<form style="margin-top: 20px; margin-left: 100px" >

<fieldset style="width: 95%">

<div class="background-color">	

<legend style="font-size: 30px;font-family: 'Open sans', sans-serif">PC</legend>

<div class="row1212" style="margin-left: -10px">

<div class="column1212">
    <div class="container2">
     <img src="images/1013.jpg" alt="Avatar" class="image">
      <a href="images/1013.jpg">
      <div class="overlay">
       <div class="text1212">Dell XPS Tower S.E.</div>
      </div>
    </a>
    </div>
</div>


<div class="column1212">
     <div class="container2">
     <img src="images/1014.jpg" alt="Avatar" class="image">
      <a href="images/1014.jpg">
      <div class="overlay">
       <div class="text1212">Lenovo Ideacentre y900</div>
      </div>
     </a>
     </div>
</div>


<div class="column1212">    
     <div class="container2">
       <img src="images/1015.jpg" alt="Avatar" class="image">
       <a href="images/1015.jpg">
       <div class="overlay">
       <div class="text1212">Chillblast Fusion GTX 1050 </div>
       </div>
     </a>
     </div>
</div>


<div class="column1212">
    <div class="container2">
     <img src="images/1016.jpg" alt="Avatar" class="image">
      <a href="images/1016.jpg">
      <div class="overlay">
       <div class="text1212">Chillblast Fusion Spectrum Ryzen</div>
      </div>
    </a>
    </div>
</div>


<div class="column1212">
    <div class="container2">
     <img src="images/1017.jpg" alt="Avatar" class="image">
      <a href="images/1017.jpg">
      <div class="overlay">
       <div class="text1212">Alienware Aurora</div>
      </div>
    </a>
    </div>
</div>


<div class="column1212">
    <div class="container2">
     <img src="images/1018.jpg" alt="Avatar" class="image">
      <a href="images/1018.jpg">
      <div class="overlay">
       <div class="text1212">Dell AlienWare X51</div>
      </div>
    </a>
    </div>
</div>


<div class="column1212">
    <div class="container2">
     <img src="images/1019.jpg" alt="Avatar" class="image">
      <a href="images/1019.jpg">
      <div class="overlay">
       <div class="text1212">Apple PC</div>
      </div>
    </a>
    </div>
</div>


<div class="column1212">
     <div class="container2">
     <img src="images/1020.jpg" alt="Avatar" class="image">
      <a href="images/1020.jpg">
      <div class="overlay">
       <div class="text1212">CiT F3 Purple MicroATX Tower</div>
      </div>
     </a>
     </div>
</div>


<div class="column1212">    
     <div class="container2">
       <img src="images/1021.jpg" alt="Avatar" class="image">
       <a href="images/1021.jpg">
       <div class="overlay">
       <div class="text1212">Inwin 901 ITX</div>
       </div>
     </a>
     </div>
</div>
</div>
</div>
</fieldset>
</form>



<form style="margin-top:20px;margin-left: 100px;margin-bottom: 10px ">

<fieldset style="width: 95%">

<div class="background-color">	

<legend style="font-size: 30px;font-family: 'Open sans', sans-serif">LAPTOPS</legend>

<div class="row1212" style="margin-left: -10px">
<div class="column1212">
    <div class="container2">
     <img src="images/1030.jpg" alt="Avatar" class="image">
      <a href="images/1030.jpg">
      <div class="overlay">
       <div class="text1212">Asus Chromebook Flip C302CA</div>
      </div>
    </a>
    </div>
</div>


<div class="column1212">
     <div class="container2">
     <img src="images/1031.jpg" alt="Avatar" class="image">
      <a href="images/1031.jpg">
      <div class="overlay">
       <div class="text1212">Lenovo ThinkPad X1 Carbon (6th Gen)</div>
      </div>
     </a>
     </div>
</div>


<div class="column1212">    
     <div class="container2">
       <img src="images/1032.jpg" alt="Avatar" class="image">
       <a href="images/1032.jpg">
       <div class="overlay">
       <div class="text1212">Huawei MateBook X </div>
       </div>
     </a>
     </div>
</div>


<div class="column1212">
    <div class="container2">
     <img src="images/1033.jpg" alt="Avatar" class="image">
      <a href="images/1033.jpg">
      <div class="overlay">
       <div class="text1212">Sony VAIO E15123CN</div>
      </div>
    </a>
    </div>
</div>


<div class="column1212">
    <div class="container2">
     <img src="images/1034.jpg" alt="Avatar" class="image">
      <a href="images/1034.jpg">
      <div class="overlay">
       <div class="text1212"> Dell XPS 13</div>
      </div>
    </a>
    </div>
</div>


<div class="column1212">
    <div class="container2">
     <img src="images/1035.jpg" alt="Avatar" class="image">
      <a href="images/1035.jpg">
      <div class="overlay">
       <div class="text1212"> HP ZBook x2</div>
      </div>
    </a>
    </div>
</div>


<div class="column1212">
    <div class="container2">
     <img src="images/1036.jpg" alt="Avatar" class="image">
      <a href="images/1036.jpg">
      <div class="overlay">
       <div class="text1212">MacBook PRO 2016</div>
      </div>
    </a>
    </div>
</div>


<div class="column1212">
     <div class="container2">
     <img src="images/1037.jpg" alt="Avatar" class="image">
      <a href="images/1037.jpg">
      <div class="overlay">
       <div class="text1212">Acer Aspire 5</div>
      </div>
     </a>
     </div>
</div>


<div class="column1212">    
     <div class="container2">
       <img src="images/1038.jpg" alt="Avatar" class="image">
       <a href="images/1038.jpg">
       <div class="overlay">
       <div class="text1212">Lenovo Yoga Book </div>
       </div>
     </a>
     </div>
</div>


</div>

</div>

</fieldset>
</form>

<div id="poll">
<h3>Which one do you prefer?</h3>
<form>
Phones
<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
<br>Laptops
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
<br>PC
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>
<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","php/poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>
<!-- Footer -->

    
   <?php 
   include 'footer.php';
   ?>


<script>

function help(str) {
    
    if (str.length == 0) { 
        document.getElementById("modelsName").innerHTML = "";
        return;
    
    } 
    else {
        
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("modelsName").innerHTML = this.responseText;
            }
        }

        xmlhttp.open("GET", "php/getHelp.php?q="+str, true);
        xmlhttp.send();
    }
}
</script>


</body>
	
	