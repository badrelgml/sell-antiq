<?php

$name:=$_REQUEST['name:'];

$email:=$_REQUEST['email:'];


$password:=$_REQUEST['password:'];

$governorate=$_REQUEST['governorate'];


if(isset($_post['btntest'])){

$host="localhost";

$user="root";

$db="omarr";





$conn=mysqli_connect($host,$user,$db);


$insert="insert into badr values('name:','email:','password:','governorate')";


mysqli_query($conn,$insert);



if($conn){

echo("<h1 style='color':green;>your registration is done</h1>");

}

else{

echo("<h1 style='color':red;>your registration is faild</h1>");

}



}



?>