<?php
$conn = mysqli_connect('localhost','mms','asdffdsa','my_list');
if(!$conn){
    die("connection fail:".mysqli_connect_error());
}