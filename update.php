<?php
$host_heroku = "ec2-54-156-121-142.compute-1.amazonaws.com";
			$db_heroku = "dqd7oa5e19ldm";
			$user_heroku = "bidifaumdbqryy";
			$pw_heroku = "d7f81c395bc38e5c760c2f7163149463308f70cb36fd9423c9b2f41d6704a535";
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			$pg_heroku = pg_connect($conn_string);
if (!$pg_heroku)
			{
				die('Error: Could not connect: ' . pg_last_error());
			}
$pi=$_GET['pi'];
$pn=$_GET['pn'];
$pc=$_GET['pc'];
$qt=$_GET['qt'];
?>
<html>
  <head>
    <title>Update</title>
  </head>
  <body>
    <br>
    <form action="" method="GET">
      <table border"0" bgcolor="white" align="center" cellspacing="20">
        
        <tr>
          <td>Product ID</td>
          <td><input type="text" value="" name="productid" required></td>
        </tr>
        
        <tr>
          <td>Product Name</td>
          <td><input type="text" value="" name="productname" required></td>
        </tr>
        
        <tr>
          <td>Product Price</td>
          <td><input type="text" value="" name="productprice" required></td>
        </tr>
        
        <tr>
          <td>Quantity</td>
          <td><input type="text" value="" name="quantityonhand" required></td>
        </tr>
        
        <tr>
          <td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Update"></a></td>
        </tr>
    </form>
  </table>
</body>
</html>
