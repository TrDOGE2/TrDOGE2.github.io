
<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="styles/styles.css">
      <script src="main.js" defer></script>
      <script src="https://kit.fontawesome.com/3d3edd7d05.js" crossorigin="anonymous"></script>

      <title>Responsive Navbar</title>
    </head>
    <body id="Ybody">
   <header>
	   
      <nav class="navbar">
        <div class="brand-title">Form</div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="Aboutus.html">About</a></li>
            <li><a href="Contact.html">Contact</a></li>
			<li><a href="Yardwork.html">Yard work</a></li>
			<li><a href="Fences.html">Fences </a></li>
			  <li><a href="form.php">Form</a></li>
          </ul>
        </div>
      </nav>
    </header> <!-- background image -->
		

    <div class="info1">

      <h1> Form  <i class="fa-solid fa-address-book"></i> </h1>

      <p> Welcome to form section this is where you fill out this form. </p>
    </div>

    <div class="info">
      <p class="c"> In buttom we have a form that you can fill out the form will give us more about you</p>

      <p class="c"> This form will used to get some of your information. This information will to used to be able to know you and contact you incase of anything.</p>
  </div>
      
  
		<!-- Use the main area to add the main content to the webpage -->
	<main>
    <form action="Insert.php" method="post">
			<label for="UserName">Name:</label>
				<input type="text" name="UserName" id="UserName" required>
	
			<label for="lastname">Last Name:</label>
				<input type="text" name="lastname" id="lastname" required>
	
			<label for="email">Email:</label>
				<input type="email" name="email" id="email" required>

			<label for="phonenumber">Phone Number:</label>
				<input type="tel" name="phonenumber" id="phonenumber" required>

			<label for="address">Address:</label>
				<input type="text" name="address" id="address" required>

		<input type="submit" value="Submit">
	</form>
   <div class="p"></div>
  </main>

		<footer>
		<p>&nbsp;&copy; Copyright 2023. All Rights Reserved.</p>
		<p><a href="mailto:contact@wildrescues.net">contact@wildrescues.net</a></p>
	</footer>
    </body>
</html>
