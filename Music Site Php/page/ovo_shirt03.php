<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <title>Form With Fields</title>
	<link rel="stylesheet" href="../css/form.css" />
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" />
</head>
<body>
<div>    
    <header role="banner" id="top">
<!-- site global navigation -->
<nav role="navigation">
		<ul class="toc">
            <center>
           <li><a href="../index.php">ABOUT</a></li>
             <li><a href="../index.php">GALLERY</a></li>
			<li><a href="../index.php">ALBUMS</a></li>
            <li><a href="../index.php">MERCHANDISE</a></li>
            <li><a href="../index.php">VIDEO</a></li>
            <li><a href="../page/contact.php">CONTACT</a></li>
            </center>
		</ul>
</nav>
<!-- site logo could go here -->

<center><img src="../images/ovo1.jpg" width="100%" height="100%"></center>
    <br>
<!-- site logo could go here -->
</header>
</div>
<main class="wrapper" role="main">
	
	<form method="post" action="show-data.php" enctype="multipart/form-data">
        
		<!-- START ACCOUNT FIELDS -->
        
		 <fieldset id="contact">
             <center><h2 class="hdr-account">STORE</h2></center>

<div class="fields">
<center>
<img src="../images02/ovo_windbreaker02.jpg" width="50%" height="50%">
    </center>
			
				<p class="row">
					<label for="email">Size:</label>
					<input type="email" id="email" name="email" placeholder="S/M/L/XL" class="field-small" />
				</p>  
      <p class="row">
					<label for="email">Price: $110</label>
    
                </p>
 
			</div>
		</fieldset>
		<!-- end account -->
		
<center><input type="submit" value="ADD TO CART" class="btn" /></center>
        
	</form>
</main>
</body>
</html>