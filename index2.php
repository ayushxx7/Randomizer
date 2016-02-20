
<?php

    

   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '9582929870';

   $dbname = 'random';
$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (mysqli_connect_errno($conn))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($conn,'random') or die ("no database"); 
$query=mysqli_query($conn,"SELECT websites FROM ufc
ORDER BY RAND()
LIMIT 1");
 
if ($result = mysqli_fetch_array($query))
{
echo '<a href="javascript: void(0)" onclick="window.open(' . '\'' . $result['websites'] . '\'' . ');">YYAAY</a>';
}
?>