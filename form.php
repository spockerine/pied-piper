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



<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<script>
$(document).ready(function(){
    $("#cbox").click(function(){
        $("#ll2").toggle();
    });
});


</script>
<style>
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
	background-color:#ffffee;
	margin-left:60px;
	margin-right:60px;
	padding-left:30px;
	padding-bottom:15px;
	margin-top:7px;
	}	








.heading{
	font-family: "sans-serif"; 
	font-size: 2em; 
	font-variant: small-caps; 
	margin-top:12px;
	margin-bottom:7px;
	
	}	
	
	












    .error{color:#ff0000;}
     form {width: 400px; }
     .control-label{float:left;
		margin-left:100px;
		margin-top:20px;
		margin-bottom:5px;
		padding-bottom:10px;
		}
    .abcd {
           color:black;
           padding-top:5px;
		   background-color:#ffffee;
           border-radius:45px;
           border:5px solid gray;
           font-size:20px;
           width:750px;
           margin-left:300px;
     }
    
    .container{text-align:center;}
    
    .btn{
           font-size:18px;
		   margin-top:60px;
           margin-left:340px;
           margin-bottom:30px;
           border-radius:60px;
           color:black;
           border:none;
		}
     #xyz{align:center;}
	 
	.form-control{
		width:400px;
	}
	.fc1{
		margin-left:30px;
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



<div class="container">
	<div class="heading">
		<strong>We Value Your Feedback</strong>
	</div>
</div>	
	<form class="form-horizontal"  id="xyz" name = "myForm" role="form" method = "POST" action="b1.php">
		<div class="abcd">
			

				<div class="form-group">  
					<label class="control-label" name="rating">Rating:
					<span class="fc1">
					<input type="radio" name="rating" required>1
					<input type="radio" name="rating" required>2
					<input type="radio" name="rating" required>3
					<input type="radio" name="rating" required>4
					<input type="radio" name="rating" required>5
					</span>
					</label>
					
				</div>
<br>
<br>
<br>
				<div class="form-group">
					<label class="control-label" name="feedback">Comments: 					
					<span class="fc1">         
					<textarea type="text" class="form-control" placeholder="Enter feedback" name="feedback" required></textarea>           
					<span class="error">*</span></span></label>
				</div>
<br>
<br>
<br>
<br>	
				
				<div class="form-group">
					<label class="control-label" name="namee">Name:
					<span class="fc1">
					<input type="text" class="form-control"  placeholder="Enter Name" name="name" required >        
					<span class="error">* </span></span>
					<input type="checkbox" id="cbox"  data-toggle="collapse" data-target="#ll2" checked></label>
				</div>
<br>
<br>

			<div class="form-group">
					<div id="ll2" class="collapse">
					<label class="control-label">Email:
					<span class="fc1">
					<input type="email" class="form-control" name="email"  placeholder="Enter email" required> 
					<span class="error">* </span></span>   </label>
					</div>
				</div>		
				
			<div class="form-group">        
				<div class="sub">
					<input type="submit" class="btn" value="submit"> 
				</div>
			</div>
		</div>
	</form>



</body>
</html>
