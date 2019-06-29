<?php
include "dbb.php";
?>


<!DOCTYPE html>
<head>


	<meta charset="utf-8">
	<title>BAUST</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/clubbase.css">
	<link rel="stylesheet" href="css/clubskeleton.css">
	<link rel="stylesheet" href="css/clublayout.css">
	<link rel="stylesheet" href="css/clubresponsive.css">
	<link rel="shortcut icon" href="images/favicon.ico">


</head>
<body>
	<div class="wrap-header">
            <div class="container">
            	<h1 class="logo"><a href="#" ><p></p></a></h1>
				<h1 style="color:yellow" class="name">BANGLADESH ARMY UNIVERSITY OF SCIENCE & TECHNOLOGY</h1>
				<nav class="moto">
					<ul>
						<li><a href="#" class="active"></a> DISCIPLINE</li> 
						<li><a href="#"></a>KNOWLEDGE  </li> 
						<li><a href="#"></a>MORALITY  </li> 
						
					</ul>
				</nav>
				<br></br>
				<ul></ul>
				<p><a href="http://localhost/login/home.html">Login</a></p>
				
			
				
				<nav class="primary">
					<ul>
						<li><a href="#" class="active"></a> </li> 
						<li><a href="#"></a>  </li> 
						<li><a href="#"></a>  </li> 
						<li><a href="#"></a></li> 
					</ul>
				</nav>
				
            </div>
            <div class="container slides">
            	<ul class="rslides clearfix">
					<li>
						<img src="images/orientation sp 17.jpg" alt="" />
						<p class="desc">cultural activities</p>
					</li>

					<li>
						<img src="images/F R Fall 17 (18).jpg" alt="" />
						<p class="desc">cultural activities </p>
					</li>
					<li>
						<img src="images/F R Fall 17 (18).jpg" alt="" />
						<p class="desc">cultural activities</p>
					</li>
				</ul>
				<div class="shadow"><img src="images/shadow.png" alt="" /></div>
				<h2>EVENT GALLARY</h2>
            </div>
        </div>
        <div class="container welcome">
        	<h1>
				<span class="green">BAUST CULTURAL CLUB</span>
				
			</h1>
			<span class="graphic">
				<img src="images/graphic.png" alt="" />
			</span>
        </div>
        <div class="container service">
        	<div class="one-third column">
				
				<p>BAUST cultural club regularly organize cultural programs, celebrating major National events. It also organizes Drama . 
				the club has taken the exponential steps to create a culture of practicing true artistry on campus.
				The goal of this club is to uplift the culture of Bangladesh by organizing various cultural activities.
				</p>
				
			
			</div></br>
			<div class="one-third column">
				<h2>President</h3>
				<p>
				
				<?php
$record = mysql_query("SELECT * FROM `pr_table`");
while($data = mysql_fetch_array($record))
{
	?>
	<tr>
	
	
	<p><?php 
	echo $data['president'];
	?>
	<td><a href="del.php?serial=<?php echo $data['serial'];?>"></a></td></p>
	
	
	<?php
}
?>
				
				
				
				
						
						
						
						   <div class="container testimonial">
        	<img src="images/nakibsir.jpg" alt=""/>
			<blockquote>
				<p> 
				<?php
$record = mysql_query("SELECT * FROM `moto_table`");
while($data = mysql_fetch_array($record))
{
	?>
	<tr>
	
	
	<p><?php 
	echo $data['premoto'];
	?>
	<td><a href="del2.php?serial=<?php echo $data['serial'];?>"></a></td></p>
	
	
	<?php
}
?>
				</p>
				<cite><strong>president</strong></cite>	
				<a href="#" target="_blank">www.baust.edu.bd</a>
			</blockquote>
        </div>
						
						
						
						
						
						<li><a href="#"></a></li> 
					</p>
				
			</div>
			
				<div class="one-third column">
				<h2> Vice President</h3>
				<p><ol>
						
						
						
					<?php
$record = mysql_query("SELECT * FROM `vice_table`");
while($data = mysql_fetch_array($record))
{
	?>
	<tr>
	
	
	<p><?php 
	echo $data['vicepre'];
	?>
	<td><a href="del3.php?serial=<?php echo $data['serial'];?>"></a></td></p>
	
	
	<?php
}
?>
 
						
					</ol></p>
				
			</div>
			<div class="one-third column">
				<h2>Membership rules and policies:</h3>
				<p>
				<?php
$record = mysql_query("SELECT * FROM `r_table`");
while($data = mysql_fetch_array($record))
{
	?>
	<tr>
	
	
	<p><?php 
	echo $data['rules'];
	?>
	<td><a href="del4.php?serial=<?php echo $data['serial'];?>"></a></td></p>
	
	
	<?php
}
?>
				
				
				</p>
				
			</div>
			<div class="one-third column">
			<a style="color:red"href="Registration Form final.pdf" target="_blank"type="application/pdf"><h1>Want's to be the member of Cultural Club</h1></a>
		</div>
			<div class="one-third column">
				<h2>Aim</h3>
				<p>This club has the following objectives: To work towards
				distributing cultural, politic, social, and social awareness
				among university students including the Arab and foreign ones.
				To develop and encourage students' talents and hobbies.
				To make various cultural competitions among the Arab and foreign students.</p>
				
				
				
			</div>
			<div class="one-third column">
				<h2>Upcoming Events</h3>
				<p>
				
				<?php
$record = mysql_query("SELECT * FROM `a_table`");
while($data = mysql_fetch_array($record))
{
	?>
	<tr>
	
	
	<p><?php 
	echo $data['achive'];
	?>
	<td><a href="del5.php?serial=<?php echo $data['serial'];?>"></a></td></p>
	
	
	<?php
}
?></p>
				
			</div>
        </div>
		<footer class="sub-footer">
			<div class="container">
				<div class="eight columns left">
					<p>Copyright 2018 <a href="#">simplewebdesigner</a> | Design by <a href="#">TAUKIR ANIKA LUBNA SINHA</a></p>
				</div>	
					
				<div class="eight columns right">
					<h1 class="logo"><a href="#" title="Artthatworks">BAUST</a></h1>
				</div>	
        	</div>  	
        </footer>
       
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.elastislide.js"></script>
<script>
  $(function () {
	$(".rslides").responsiveSlides({
		pager: true,  
		nav: true
		
	});
	$('#carousel').elastislide({
		imageW 	: 300,
		minItems	: 3
	});  	 
  });
</script>

</body>
</html>