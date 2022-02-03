<?php

$con=mysqli_connect('localhost','root','123','crud');

if(isset($_POST['save']))

{
    $name=$_POST['name'];
    $address=$_POST['address'];

    $sp=mysqli_query($con,"INSERT into study values ('$name','$address')");

    if($sp)
    {
        echo "success";
    }
    else
    {
        echo "Invalid";
    }
}

?>