<?php
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,'port');

    if(isset($_POST['updateport']))
    {
        $id =$_POST['update_id'];

        $clientName =$_POST['clientName'];
        $pointA_pointB =$_POST['pointA_pointB'];
        $rackNo =$_POST['rackNo'];
        $odfNo =$_POST['odfNo'];
        $wNo = $_POST['wNo'];
        $portNo = $_POST['portNo'];
        $comments = $_POST['comments'];

        $query = "UPDATE assignment SET clientName='$clientName',pointA_pointB='$pointA_pointB',rackNo= '$rackNo',odfNo='$odfNo',wNo='$wNo',portNo='$portNo',comments='$comments' WHERE id='$id'";

        $query_run = mysqli_query($conn,$query);
        if ($query_run)
        {
            echo '<script> alert("PORT UPDATED");</script>';
            header('Location:index.php');
        }
        else
        {
            echo '<script> alert("PORT  NOT SAVED");</script>';
        }
    }

?>