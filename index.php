<DOCTYPE! html>
<head>
	<title>TechShop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	 <link rel="stylesheet" type="text/css" href="styles/carousel2.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
  <script src="js/dropdown.js"></script>
  <style type="text/css">
    html{
            scroll-behavior: smooth;
        }

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

	<!-- HEADER -->
<?php 
  include 'header.php';
  ?>
	<!-- MAIN SLIDER -->
	

	<div class="slideformat" style="font-family: Verdana, sans-serif;">

<div class="mySlides fade">
  
  <img src="images/111.jpg" style="width:100%" id="img">
  <div class="text"><p class="textcaption">iPhone XS</p>
  <p>

    <?php

$filename = "php/paragraph1.txt";

@$filehandle = fopen($filename,"r") or die("Unable to open file!");

echo @$filecontent = fread($filehandle,filesize($filename));

@fclose($filehandle);
?>

  </p>

  </div>
</div>

<div class="mySlides fade">
  
  <img src="images/222.jpg" style="width:100%" id="img">
  <div class="text"><p class="textcaption">Dell XPS</p>
  <p>
    The XPS 2-in-1’s fan-less design allows a slimmer,
    sleeker form, limits heat and enables silent operation.
    It’s a beautifully mobile powerhouse that lets you work
     and play anywhere.
    <?php

    $teksti1 = "The XPS 2-in-1’s fan-less design allows a slimmer,
    sleeker form, limits heat and enables silent operation."; 

   $file2 = "php/paragraph2.txt";

   @$filehandle2 = fopen($file2,"w") or die("Unable to open file!");

   fwrite($filehandle2, $teksti1);
   
   $teksti2 = "It’s a beautifully mobile powerhouse that lets you work and play anywhere.";
  
   fwrite($filehandle2, $teksti2);

   @fclose($filehandle2);

?>
  
</p>
  </div>
</div>

<div class="mySlides fade">
  
  <img src="images/333.png" style="width:100%" id="img">
  <div class="text"><p class="textcaption">iPad Pro</p>
  <p>
        <?php
try {
    $fh = fopen("php/paragraph3.txt", "r");
    if (! $fh) {
        throw new Exception("Could not open the file!");
    }
}
catch (Exception $e) {
    echo "Error (File: ".$e->getFile().", line ".
          $e->getLine()."): ".$e->getMessage();
}
?>

</p>
  </div>
</div>

<div class="mySlides fade">
  
    <img src="images/444.png" style="width:100%" id="img">
  <div class="text"><p class="textcaption">Apple Watch</p>
  <p>The largest Apple Watch display yet. New electrical heart sensor.
   Re-engineered Digital Crown with haptic feedback.
    Entirely familiar, yet completely new,
     Apple Watch Series 4 resets the standard for what a watch can be.</p>
  </div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>



</div>
<div style="text-align:center" class="dots">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>  
</div>




<!-- RECENT AND BUTTONS -->

	   <div class="recent">
    <div class="container3">
      <div>
        <div class="section_title">Recent releases</div>
        <div class="section_subtitle">Search your dream phone</div>
      </div>
      <div style="height: 100;width: 67%"></div>
      <div>
        <a class="prev2" onclick="plusPart(-1)">&#10094;</a>
        <a class="next2" onclick="plusPart(1)">&#10095;</a>
      </div>
    </div>
  </div>
	<!--RECENT SHOW-->

	<div class="container4">
        <div class="part1 fade">
        <div class="mslides">
          <div style="height: 100%;width:100%;">
          	<img src="images/img1.jpg" style="height: 350px;width: 100%;">
          	      <div class="overlay">
    				<div class="text2">Hello World</div>
  				</div>	
          </div>
     
        </div>
        <div class="mslides">
        	 <div style="height: 100%;width:100%;"><img src="images/img2.jpg" style="height: 350px;width: 100%;"></div>
        	 <div class="overlay">
    				<div class="text2">Hello World</div>
  				</div>	
        </div>
        <div class="mslides">
        	 <div style="height: 100%;width:100%;"><img src="images/img4.jpg" style="height: 350px;width: 100%;"></div>
        	 <div class="overlay">
    				<div class="text2">Hello World</div>
  				</div>	
        </div>
      </div>
      <div class="part1 fade">
        <div class="mslides2">
        	 <div style="height: 100%;width:100%;"><img src="images/img5.jpg" style="height: 350px;width: 100%;"></div>
        	 <div class="overlay">
    				<div class="text2">Hello World</div>
  				</div>	
        </div>
        <div class="mslides2">
        	 <div style="height: 100%;width:100%;"><img src="images/img6.jpg" style="height: 350px;width: 100%;"></div>
        	 <div class="overlay">
    				<div class="text2">Hello World</div>
  				</div>	
        </div>
        <div class="mslides2">
        	 <div style="height: 100%;width:100%;"><img src="images/img7.jpg" style="height: 350px;width: 100%;"></div>
        	 <div class="overlay">
    				<div class="text2">Hello World</div>
  				</div>	
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php 
    include 'footer.php';
    ?> 


	
</body>
<script type="text/javascript" src="js/mainSlider.js"></script>
<script type="text/javascript" src="js/carousel2.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</html>