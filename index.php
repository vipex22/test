<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello Quang!</p>'; 
  try{
   $myPDO = new PDO("pgsql:host=localhost;dbname=Lab6","dqd7oa5e19ldm","d7f81c395bc38e5c760c2f7163149463308f70cb36fd9423c9b2f41d6704a535");
    echo "Connected";
  }catch(PDOException $e)
  {
   echo $e->getMessage();
  }
  
 ?> 
  
 </body>
</html>
