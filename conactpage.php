<?php
$con=mysqli_connect("localhost","root","","parag");
$name=$_POST["name"];
$dob=$_POST["dob"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$city=$_POST["city"];

//echo "insert into school(`Name`,`Phone`,`Email`,`City`) values('".$name."','".$phone."','".$email."','".$city."')" ; die;
$query=("insert into student1(`Name`,`Dob`,`Contact`,`Email`,`City`) values('".$name."','".$dob."','".$phone."','".$email."','".$city."')");
$q=mysqli_query($con,$query);


if($q)
      // echo "Data inserted";
    header("location:show.php");
 
else
        echo "error";
      // header("location:contact.php");

?>