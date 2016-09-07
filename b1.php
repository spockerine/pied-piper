<!DOCTYPE html>
<html lang="en">




<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maxmium-scale=1.0"></meta>
<meta property="og:title" content="Pied Piper">
<meta property="og:url" content="http://piedpiper.com">
<meta property="og:image" content="http://piedpiper.com/logo.png">
<meta property="og:description" content="http://piedpiper.com">



<style>
 .err{color:#ff0000;}
 .cont{font-size:25px;
	text-align:center;
	margin-top:55px;
	}
.contt{font-size:25px;
	text-align:center;
}
 html{
	background-color:#ffffff;
	}

#content{
	background-color: #ffffff;
	padding-top:100px;
	margin-top:20px;
	margin-left:60px;
	margin-right:60px;
	padding-left:30px;
	
	}
body{
	margin:0;
	}
.brand-name{ 
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif; 
	font-size: 2em; 
	font-variant: small-caps; 
	float:left; 
	margin-left: 0.3em; 
	} 
.top-bar{
	margin-top:0px;
	color:black;
	}		
.description{
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif; 
	font-size: 1.2em; 
	float:right;
	margin-right:0.5em;
	margin-top:0.9em;
	}

	
	
.search_area{
	position:absolute;
	padding-left:25px;	
	margin-left:250px;
	width:700px;
	color:black;
	padding-top:2.5px;
	padding-bottom:2.5px;
	margin-top:8px;
	border-color:black;
	border-radius:5px;
	border-bottom-color:black;
	}

.search_submit{
	margin-left:650px;
	margin-top:1.2em;
	margin-bottom: 0px;
	}	

.search_area{
	<!--background: url(https://a-v2.sndcdn.com/assets/images/header/search-dbfe5c.svg) 0 0 no-repeat;-->
	float:right;
	background-padding-top:5px;
	<!--background-position:absolute;-->
	}	
.search a{
	margin-top:1em;
	padding-top:10px;
	}	
.header{
	background-color:#ffffee;
	padding-bottom:42px;
	}
.description,.brand-name{
	color:black;
	}	
.con{
	background-color:#ffffdd;
	margin-left:60px;
	margin-right:60px;
	padding-left:30px;
	padding-bottom:15px;
	margin-top:7px;
	}	

</style>


</head>

<body>
<div class="header">
<div class = "top-bar" >
	<span class="brand-name">
		<strong>Pied Piper</strong>
	</span>
	
	<span class="description">
		<strong>A Music Visualizer and Player</strong>
	</span> 
	
</div>
</div>
<br>
<?php 
$Name = htmlspecialchars($_POST["name"]); 
$Feedback = htmlspecialchars($_POST["feedback"]);
$Email = htmlspecialchars($_POST["email"]);
?>
<div class="cont">
<?php 
echo "<i>Hi<strong> " . $Name . "</strong><br> Thank You for your feedback  ";
echo "<br> Your Feedback which states that our site is <strong>" . $Feedback . " </strong>is very helpful.</i>";  
?>
</div>
<br>
<div class="contt">
<a href=""><strong><i>Now click me to get back to our awesome and trippy page to listen to more songs.</i></strong></a>
</div>


</body>

</html>
