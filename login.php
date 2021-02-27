<html>
<head>
    <link rel="stylesheet" href ="styles.css">
    <title> Login </title>
    <marquee bgcolor="gray" 
             scrollamount="12" 
             direction="left" 
             onmouseover="this.stop();" 
             onmouseout="this.start();">
        [2/27/2021]: Remember to check the database everyday!
    </marquee>
    <ul> 
        <li> <a href="index.php">Main Page</a></li>
        <li> <a href="">Login </a></li>       
    </ul>
  </head>
    <body>
      <style>
        body {
          background-image: url('background.jpg');
          background-attachment: fixed;
          background-size: 100%100%;
        } 
      </style>
      <div class="login">
		<h2>Member login</h2>
		<br>
		<p>Account</p>
		<input class="user" type="text" placeholder="Enter account">
		<br>
		<p>Password</p>
		<input class="pass" type="password" placeholder="Enter password">
		<br>
		<br>
		<input type="submit" value="login">
		<br>
	</div>
	<?php
	    if ($user == "staff" && $pass == "123")
		    header("location:staff.php");
	    if ($user == "boss" && $pass == "456")
		    header("location:boss.php");
	?>
      
    </body>
</html>
