<?php
$servername="localhost";
$database="hospital";
$username="root";
$password="";
$connection=mysqli_connect($servername,$username,$password,$database);
if($connection)
{
        echo "you are connected";
        $username=$_POST["name"];
        $e=$_POST["email"];
        $d=$_POST["date"];
        $dept=$_POST['department'];
        $phone=$_POST['phone'];
        $insurace=$_POST['ins'];
      
       $sql="INSERT INTO patient(name, phoneno, email, insurance, date_admitted, department) VALUES('$username','$phone','$e','$insurace','$d','$dept')";
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
