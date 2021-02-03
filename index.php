<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello Quang!</p>'; 
  try{
   $myPDO = new PDO("pgsql:host=ec2-54-156-121-142.compute-1.amazonaws.com;dbname=dqd7oa5e19ldm","bidifaumdbqryy","d7f81c395bc38e5c760c2f7163149463308f70cb36fd9423c9b2f41d6704a535");
    echo "Connected";
     $query = "SELECT * FROM test_lab6 LIMIT 2";
  }catch(PDOException $e)
  {
   echo $e->getMessage();
  }



  
 ?> 
  
 </body>
</html>
