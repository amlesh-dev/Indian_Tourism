<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connnection successful";
}
else{
	echo "No connection";
}

mysqli_select_db($con,'projectdbms3');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$subject = $_POST['subject'];

$query = " insert into userinfo (firstname,lastname,country,subject ) values('$firstname', '$lastname', '$country', '$subject')";

echo "$query";

mysqli_query($con,$query);

header('location:contact.php');

?>