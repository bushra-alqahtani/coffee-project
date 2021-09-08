<?php 

//commecting to DB

$conn=mysqli_connect('localhost','bushra','test1234','coffee-ninja');

//check the connection 

if(!$conn) {
    echo 'it is problem'.mysqli_connect_error();
}



 ?>