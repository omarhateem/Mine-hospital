<?php
$servername="localhost";
$database="hospital";
$username="root";
$password="";
$connection=mysqli_connect($servername,$username,$password,$database);
if($connection)
{
        echo "you are connected";
        $dss=$_POST["dss"];
        $username=$_POST["name"];
        $e=$_POST["email"];
        $d=$_POST["date"];
        $dS=$_POST["Gender"];
        $dept=$_POST['Department'];
        $phone=$_POST['phone'];
        $insurace=$_POST['message'];
      
       $sql="INSERT INTO doctors (dss, Name, Email, Brithday, Gender, Department, Phone_Number, Additional_Message) VALUES ('$dss','$username','$e','$d','$dS','$dept','$phone','$insurace') ";
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
