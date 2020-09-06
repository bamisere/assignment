<?php
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,'port');

    if(isset($_POST['porttableid']))
    {
        

        $clientName =$_POST['clientName'];
        $pointA_pointB =$_POST['pointA_pointB'];
        $rackNo =$_POST['rackNo'];
        $odfNo =$_POST['odfNo'];
        $wNo = $_POST['wNo'];
        $portNo = $_POST['portNo'];
        $comments = $_POST['comments'];

        $query = " SELECT * FROM assignment WHERE clientName LIKE '%".$clientName."%'";

        $query_run = mysqli_query($conn,$query);
        if ($query_run)
        {
            echo '<script> alert("PORT");</script>';
            header('Location:index.php');
        }
        else
        {
            echo '<script> alert(" NO RECORD ");</script>';
        }
    }

?>
