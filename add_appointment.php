
<?php 

require('admin/php/connect.php');

$id=$_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$msg = $_POST['msg'];

// echo $id." ".$name." ".$email." ".$date." ".$time." ".$msg;

$query = "INSERT INTO appointment(name, email, date, time, message, salon_id) VALUES('$name', '$email', '$date', '$time', '$msg', $id)";

$result = mysqli_query($conn, $query);

if($result){
    echo '<h1>Thank you!</h1>';
    echo '<h3>your appointment has been added!, we will contact sortly on your email!</h3>';
}
else{
    echo '<h1>unable to add review!</h1>';
}

?>