<?php
$fistname=$_REQUEST['firstname'];
$last=$_REQUEST['last'];
$phoneno.=$_REQUEST['phoneno.'];
$email=$_REQUEST['email'];
$adress=$_REQUEST['adress'];
$streetname=$_REQUEST['streetname'];
$apartmentnumber=$_REQUEST['apartmentnumber'];
$floornumber=$_REQUEST['floornumber'];
$city=$_REQUEST['city'];

if(isset($_POST['btntest']))
{
 $host="localhost";
 $user="root";
 $db="el cookies";

 $conn=mysqli_connect($host,$user,$db);

 $insert="insert into cookie lover values('$fistname','$last','$phoneno','$email','$adress','$streetname','$apartmentnumber','$floornumber','$city')";

 mysqli_query($conn,$insert);
 
 if($conn){
    echo("<h1 style='color:green;'> Your Registration is Done!</h1>");
}
else{
    echo("<h1 style='color:red;'> Your Registration is Failed!</h1>");
}

}










?>