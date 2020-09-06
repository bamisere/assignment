<?php
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,'port');

    if(isset($_POST['deleteport']))
    {
        $id =$_POST['delete_id'];

        $query = "DELETE FROM assignment WHERE id='$id'";

        $query_run = mysqli_query($conn,$query);
        if ($query_run)
        {
            echo '<script> alert("PORT DELETED");</script>';
            header('Location:index.php');
        }
        else
        {
            echo '<script> alert("PORT  NOT DELETED");</script>';
        }
    }

?>