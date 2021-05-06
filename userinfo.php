<?php
# making connection
$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection succesful";
}
else{
    echo "No connection";
}

#making connection with database created by slecting the database
mysqli_select_db($con , 'travelphp');

#accesing the elements to be entered email, username etc;
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "INSERT INTO userinfo (user, email, mobile, comment) VALUES ('$user', '$email', '$mobile', '$comment')";

#firing the query to amke it work
mysqli_query($con , $query);

header("location: index.php");

?>