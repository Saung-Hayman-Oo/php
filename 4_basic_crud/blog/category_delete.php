<?php
    require_once "template/header.php";

    $id=$_GET['id'];
    $sql="DELETE FROM to_do WHERE id=$id";
    if(mysqli_query($conn,$sql)){
        echo "<script>location.href='category_list.php'</script>";
    }else{
        echo "Delete Fail:",mysqli_error();
    }
?>