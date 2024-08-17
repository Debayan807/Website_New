
<?php
$con = mysqli_connect('localhost','root');

// Check connection
if ($con) {
    echo "Connected successfully";
}
else{
echo "Connected not successfully";
}
mysqli_select_db($con, 'form_data');  //select query

$user = $_POST['username'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$comment =$_POST['comment'];

$query = " insert into userinfo (username, email, mobile, comment)
values ('$user', '$email', '$mobile', '$comment')";

mysqli_query($con, $query);
header('location:index.php');
?>