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
            <li><a href="#contact">CONTACT</a></li>
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
             <center><h2 class="hdr-account">CONTACT US</h2></center>

			<div class="fields">
				<p class="row">
					<label for="first-name">First Name<span class="required">*</span>:</label>
					<input type="text" id="first-name" name="first_name" class="field-large" required="required" aria-required="true" />
				</p>
				<p class="row">
					<label for="last-name">Last Name:</label>
					<input type="text" id="last-name" name="last_name" class="field-large" />
				</p>
				<p class="row">
					<label for="email">Email:</label>
					<input type="email" id="email" name="email" placeholder="yourname@example.com" class="field-large" />
				</p>   			
         
    <div>
    <label for="msg">Message:</label>
    <textarea id="msg" name="user_message"></textarea>
  </div>
			</div>
		</fieldset>
		<!-- end account -->
		
<center><input type="submit" value="SEND MESSAGE" class="btn" /></center>
        
	</form>
</main>
</body>
</html>