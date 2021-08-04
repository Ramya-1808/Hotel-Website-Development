<!DOCTYPE html>
<html lang="en-us">
<head>
     <title>N.RAMYA 2019115076</title>
	 <meta charset="Utf-8">
	 <meta name="author" content="N.Ramya">
	 <meta name="keywords" content="Index,html,jss">
	<style>
	      html{
		        margin :10px;
				border-width:thick;
				padding:20px;
				 
				width:100%;
				}
			body{
			    background-image:url(bgimg6.jpg);
				background-blend-mode: lighten;
				background-attachment:scroll;
			    font-family:'open sans',sans-serif;
				font-size:30px;
				color:#ffffff;
				background-position:center-right;
				background-repeat:no-repeat;
				}
				h1{
			    font-family:georgia,garamond,sans-serif;
			    font-size:40px;
	       		font-style:italic;
			    color:#000000;
			    text-align:center;
				border-color:#ffff00;
				border-style:dashed;
			   }
			#sec{
			    float:center-right;
				color:#ffffff;
				}
			#hotel{
			      color:#ffffff;}
			    
			#e{
				color: red;
			}
			#b{
				float:center-right;
			}
			#refresh{
				background-color:white;
				color:black;
			}
			.move{
				float:right;
			}
 
           a:link {
           color: black;
                  }

 
           a:visited {
           color: green;
            }

 
           a:hover {
           color: hotpink;
           }

 
           a:active {
           color: blue;
           }
			 
		</style>
		</head>
	<body>
	<?php
	 if($_POST)
	 {
		 $fname=$_POST['fname'];
		 $lname=$_POST['lname'];
		 $start=$_POST['arriv'];
		 $end=$_POST['depart'];
		 echo"Welcome"." ".$fname." ".$lname."!"."<br>"."Reservation has been made from"." ".$start." "."to"." ".$end." "."."."<br>"."Successfully booked!";
	 }
	 ?>
	<h1> ACCOMMODATIONS </h1>
	 <hr>
	 <form id="hotel" method="POST" action="info1.php">
	 <fieldset>
	 <legend>
	  DETAILS FOR RESERVATION:
	  </legend>
	  <font size=5>
	  FIRST NAME<span id="e">*</span>: <input type="text" size="30"  name="fname" required></input>
	  <span id="b">
	  LAST NAME<span id="e">*</span>: <input type="text" size="30"  name="lname" required></input></span>
	  <br>
	  PHONE<span id="e">*</span>: <input type="tel" name="tele" required></input>
	  <br>
	  EMAIL<span id="e">*</span>:<input type="email" name="mail" required></input>
	  <br>
	  ARRIVAL DATE<span id="e">*</span>: <input type="date" name="arriv" value="Today" required></input>
	  <br>
	  DEPARTURE DATE<span id="e">*</span>: <input type="date" name="depart" data-value="7" value="After one week" required></input><br>
	  NUMBER OF ADULTS<span id="e">*</span>: <input type="number" name="adults" value="1" min="1" max="20" required></input><br>
	  NUMBER OF CHILDREN:<input type="number" name="child" value="0" min="1" max="20" required></input><br>
	  <input type="submit"/><img src="smiley.jpg" alt="Smiley face" width="50" height="50" align="top"/>
	  
	  </font>
	  </fieldset>
	  </form>
	  <hr>
	 
	  <a id="refresh" href="homepage.html" target="_blank">HOME</a>-
	  <a id="refresh" href="info2.html" target="_blank">SERVICES & AMENITIES</a>-
	  <a id="refresh" href="info3.html" target="_blank">WEDDINGS</a>-
	  <a id="refresh" href="info4.html" target="_blank">MEETINGS & EVENTS</a>-
	  <a id="refresh" href="info5.html" target="_blank">DINING</a>-
	  <a id="refresh" href="info6.html" target="_blank">GALLERY</a>
	 </body>
 
	 </html>
		