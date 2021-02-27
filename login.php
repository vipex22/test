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
      <h1 style="color:white">Login To ATN Shop</h1>
    <div><h2 style="color:white;">LoginSession</h2>
	<form style="color:white;" method="POST">
	Username:<input type="text" name="userid"> <br>
	Password:&nbsp;<input type="password" name="password"> <br>
	<input type="submit" value="login">
    </form>
    </div>
      
    </body>
</html>
