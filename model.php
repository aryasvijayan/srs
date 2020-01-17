<?php
 // include '../controller/controller.php';
  class model{
 	public  $conn;
 	
  	public function __construct()
  	{
   
    //$conn = mysqli_connect("localhost","root","") or die('Not connected to Database<br>' . mysql_error());
         }
  	
  	public function insert($firstname, $lastname,$mobile,$Departmentname,$Coursename,$Password,$Email,$name,$Semno,$year)
  	{
       $host= "localhost";
     $username   = "root";
     $password   = "";
     $dbname= "srs";
  		///echo $uname;///
  		echo $password."Model";
	$conn =mysqli_connect($host, $username, $password,$dbname);

    echo  $sql = "INSERT INTO register (firstname, lastname,mobile,Departmentname,Coursename,Password,Email,name,Semno,year)
              VALUES ('$firstname','$lastname','$mobile','$Departmentname','$Coursename','$Password','$Email','$name','$Semno','$year')";

        if (mysqli_query($conn,$sql)) {
             echo "New record created successfully";
        } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }

         mysqli_close($conn);



}

	    }
?>