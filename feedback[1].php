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
			    background-image:url(bgimg11.jpg);
				background-blend-mode: lighten;
				background-attachment:scroll;
			    font-family:'open sans',sans-serif;
				font-size:30px;
				color:#000000;
				background-position:center-right;
				background-repeat:no-repeat;
				display:block;
				}
				#box{
				font-family:georgia,garamond,sans-serif;
				}
</style>
</head>
<body>
<script>
function myfunc(){
 
var a=document.forms["form1"]["R1"].value;
document.getElementById('result').innerHTML="done";
var a1=a.toLowerCase();
if(a1=="yes"){
<?php header('location: homepage.html')?>}
else{
document.getElementById('result').innerHTML="Sorry!";
}
}
</script>
<form action="feedback.php" method="POST" class="container1" id="box" name="form1">
		<h1>FEEDBACK</h1>
		<font size="5">
		<ul>
		<li id="q1">Does our Hotel 'The Sparkle' meet all your requirements?<br>
		 <input id="q1" type="radio" name="R1" value="Yes"/> YES<br>
		 <input id="q1" type="radio" name="R1" value="Partially"/> PARTIALLY<br>
		 <input id="q1" type="radio" name="R1" value="No"/> NO<br>
		 </li>
		 </ul>
		 <input type="submit" value="Submit" onclick=myfunc();> 
		 <br>
		 <p id="result"></p>
		 </font>
 </form>

</body>
</html>