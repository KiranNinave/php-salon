<?php 

require('admin/php/connect.php');

$id = $_GET['id'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$query = "INSERT INTO review(email, comment, salon_id) VALUES('$email', '$comment', $id)";

$result = mysqli_query($conn, $query);

if($result){
    echo '<h1>review added!</h1>';
}
else{
    echo '<h1>unable to add review!</h1>';
}

?>