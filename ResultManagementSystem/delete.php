<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'test');

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $query = "DELETE FROM StudentResult WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Date Deleted"); </script>';
        header("location:display.php");
    }
    else
    {
        echo '<script> alert("Date Not Deleted"); </script>';
    }

}
?>