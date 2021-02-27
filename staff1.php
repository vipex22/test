<html>
	<head>
    <link rel="stylesheet" href ="styles.css">
    <title> Database </title>
    <marquee bgcolor="gray" 
             scrollamount="12" 
             direction="left" 
             onmouseover="this.stop();" 
             onmouseout="this.start();">
        [2/27/2021]: Remember to check the database everyday!
    </marquee>
    <ul>
        <li> <a href="">View database</a> </li>
	    <li> <a href="login.php"> Log out</a> </li>
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
		<?php 
			echo '<p>ATN Shop </p>'; 
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
			$query = 'select * from atnshop1';
			$result = pg_query($pg_heroku, $query);
			$i = 0;
			echo '<html><body><table><tr>';
			while ($i < pg_num_fields($result))
			{
				$fieldName = pg_field_name($result, $i);
				echo '<td>' . $fieldName . '</td>';
				$i = $i + 1;
			}
			echo '</tr>';
			# Display data row by row
			$i = 0;
			while ($row = pg_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			pg_free_result($result);

			echo '</table></body></html>';

		?> 
	</body>
</html>
