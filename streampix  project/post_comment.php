<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "login_sample_db";

$connect = mysqli_connect($server,$username,$password);
if($connect){
    $select = mysqli_select_db($connect,$database);
}
else{
    echo "mysqli_error($connect)";
}

$name = $_REQUEST['name'];
$comment = $_REQUEST['comment'];

$comment_length = strlen($comment);

if($comment_length > 100){
    header("location: page.php?error=1");
}else{
    mysqli_query($connect, "INSERT INTO comments VALUES('','$name','$comment')");
    header("location: page.php");
}

?>