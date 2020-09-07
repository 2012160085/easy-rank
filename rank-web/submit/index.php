<?php
$config = parse_ini_file('app.ini'); 
$conn = mysqli_connect($config['DB_NAME'],$config['DB_USER'],$config['DB_PASSWORD'],$config['DB_DATABASE']);
if($conn){
  echo 'GOOD';
else{
  echo 'BAD';
}
?>
