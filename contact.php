<DOCTYPE! html>
<head>
	<title>test</title>
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
<div style="background-color:#282828; width: 850px;box-shadow: 5px 5px 5px #888888; border: 2px solid black; float: left; padding: 3px;margin-top:8%; margin-left:370px;margin-bottom: 10px;">

       <!-- ========== google maps =================================== --> 
       
            
             <iframe width="840" height="600" style="background:transparent;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                       src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Fakulteti+Teknik+(UP)&amp;aq=&amp;
                                      sll=42.654446,21.165848&amp;sspn=0.017485,0.042272&amp;ie=UTF8&amp;hq=Fakulteti+Teknik&amp;hnear=&amp;iwloc=lyrftr:m,
                                      16816669654062020337,42.648133,21.166534&amp;ll=42.654446,21.165848&amp;spn=0.017485,0.042272&amp;output=embed"></iframe>
                                      
        
        
        <table border="0" style="margin-right:50px;">
        
        <tr><td><p style="color: white">
        
        	<b>Universiteti i Prishtinës <br>
			Fakulteti i Inxhinierisë Elektrike dhe Kompjuterike</b> <br>
			Bregu i Diellit, p.n. <br>
			10000 Prishtinë	<br>
			Republika e Kosovës	<br>
			Tel.: +381(0)38 554 896 ext.102	<br>
			Fax: +381(0)38 542 525	<br>
			Mail:  fiek@uni-pr.edu	<br>
        
        </p>	</td> 
        
        <td>	
		
		<img src="http://api.qrserver.com/v1/create-qr-code/?color=000000&amp;bgcolor=FFFFFF&amp;
		data=Universiteti+i+Prishtin%C3%ABs%0AFakulteti+i+Inxhinieris%C3%AB+Elektrike+dhe+Kompjuterike%0ABregu+i+Diellit%2C+p.
		n.%0A10000+Prishtin%C3%AB%0ARepublika+e+Kosov%C3%ABs%0ATel.%3A+%2B381(0)38+554+896+ext.102%0AFax%3A+%2B381(0)
		38+542+525%0AMail%3A+fiek%40uni-pr.edu+&amp;qzone=1&amp;margin=0&amp;
		size=200x200&amp;ecc=L" alt="qr code" /></td>
        </tr>
        </table>                              
        
        </div>
</body>
 </html>