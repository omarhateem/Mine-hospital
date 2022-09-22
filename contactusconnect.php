<?php
$servername="localhost";
$database="hospital";
$username="root";
$password="";
$connection=mysqli_connect($servername,$username,$password,$database);
if($connection)
{
        echo "you are connected";
        $n=$_POST["name"];
        $e=$_POST["email"];
        $pho=$_POST['phone'];
        $fe=$_POST['message'];
      
       $sql="INSERT INTO users(name, phoneno,email,feedback) VALUES('$n','$pho','$e','$fe')";
       if (mysqli_query($connection, $sql))
{
    echo "<br>";
    echo "feedback sucessufully submitted";
}
      
       mysqli_close($connection);



}
else
{
    die('could not connect:');
}
