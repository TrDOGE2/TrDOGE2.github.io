
<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="styles/styles.css">
      <script src=".main.js" defer></script>

      <title>Responsive Navbar</title>
    </head>
    <body id="Ybody">
   <header>
	   
      <nav class="navbar">
        <div class="brand-title">form</div>
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
		
		<footer>
		<p>&nbsp;&copy; Copyright 2021. All Rights Reserved.</p>
		<p><a href="mailto:contact@wildrescues.net">contact@wildrescues.net</a></p>
	</footer>
	
	</main>
    </body>
</html>
