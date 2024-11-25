<?php 

    $con=  mysqli_connect("localhost","root","","test");
    if(mysqli_connect_errno())
    {
        echo "Connection FAILed" . mysqli_connect_error();
    }

?>