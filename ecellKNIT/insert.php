<?php
include('header.php');


if(isset($_POST['submit'])){
	
$name=$_POST['na'];
$email=$_POST['email'];
$messga=$_POST['messg'];

if(empty($name)){
	header("Location: index.html");
	
}
else if(empty($email)){
	
	header("Location: index.html");
}

else{if(mysql_query("INSERT INTO message (name,email,message) VALUES('$name','$email','$messga')"))
	{
                 header("Location: index.html");
	}
}
}







?>