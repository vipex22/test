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
        <li> <a href="data.php">View database</a> </li>        
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
		<p>Email address</p>
		<input class="user" type="text" placeholder="Enter email">
		<br>
		<p>Password</p>
		<input class="pass" type="password" placeholder="Enter password">
		<br>
		<br>
		<button>Login</button>
		<br>

	</div>
      
    </body>
</html>
