<html>
<head>
  
  <title></title>

<link rel="stylesheet" type="text/css" href="styles/aboutus.css">
<link rel="stylesheet" type="text/css" href="styles/footer.css">


<style type="text/css">
html
    {
            
      scroll-behavior: smooth;
        
    }

    i 
        {
  
      border: solid white;
      border-width: 0 3px 3px 0;
      display: inline-block;
      padding: 3px;
        }

.down   
{
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}

        .dropbtn 
        {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: blue;
  cursor: pointer;
}


.dropbtn:hover, .dropbtn:focus 
{
  background-color: #2980B9;
}


.dropdown 
{
  margin-top:  20px;
  margin-left: 150px; 
  position: relative;
  display: inline-block;
}


.dropdown-content 
{
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown-content a 
{
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown-content a:hover 
{
  background-color: #ddd
}

.show 
{
  display:block;
}
   

  </style>
	
</head>

<body>

	<!-- HEADER -->

<?php 

  include 'header.php';

  ?>


<div class="wrapper">

<div class="personi">

<h1>Joan Smalls</h1>

<img src="images/person3.jpg" alt="personi i trete" onclick="clickCounter()" />
<div id="result"></div>

<p><h2>COO</h2></p>

<p>Hello everyone, my name is Joan Smalls, and I am the chief operating officer.</p>

<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
<p>

  Joan Smalls is a Brand and Marketing Strategist who partners with CEOs, executives and solopreneurs to grow their personal 
and professional brands, human-to-human.</p>
 
  <p> After spending nearly a decade working in PR and marketing for multimillion dollar brands and startups, Joan knows what 
  truly drives conversions, sold-out launches and New York Times interviews—and it’s not mastering the marketing flavor of 
the week.</p>
   
   <p> It’s how well you connect with the heart-beating people you’re trying to help and communicate your understanding back 
    to them.

</p>


<p>Here are my social media</p>



<ul style="list-style: none; display: flex;position: relative;left: 45%;margin-bottom: 20px;">
  <li> <a href="https://www.linkedin.com"><img src="images/linkedinicon.png" alt="Connect on linkedin"></a></li>
    <li> <a href="https://www.twitter.com"><img src="images/twittericon.png" alt="Follow on twitter"></a></li>
    <li> <a href="https://www.pinterest.com"><img src="images/pinteresticon.png" alt="Follow on pinterest"></a></li>
</ul>



</div>
</div>
<table style="width:100%; text-align:center;margin-bottom: 40px;">
  <tr>    
      <th>Jane Doe</th>
      <th>John Doe</th>
    </tr>
    <tr>
      <td><img src="images/person1.jpg" width="250px" /></td>
      <td><img src="images/person2.jpg" width="250px" /></td>
    </tr>
    <tr>
      <td>CEO</td>
      <td>CFO</td>
    </tr>
<tr>
  <td><a href="person2.php">See more</a></td>
  <td><a href="person3.php">See more</a></td>
</tr>
  
</table>
</body>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
 
 <!-- Footer -->
    
    <?php 
    
    include 'footer.php';
    
    ?> 

    
</html>