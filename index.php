<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PORT ASSIGNMENT </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>
<body>

            

     <!--  add Modal -->
     <div class="modal fade" id="portaddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD PORT DETAILS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <!--modal form-->
             <form action="insert.php" method="POST">
                <div class="modal-body">
                
                    <div class="form-group">

                        <label>CLIENT NAME</label>
                        <input type="text" name="clientName" class="form-control" placeholder="ENTER CLIENT NAME">
                        
                    </div>
                    <div class="form-group">

                        <label>POINT A - POINT B</label>
                        <input type="text" name="pointA_pointB" class="form-control" placeholder="POINT A - POINT B">
                        
                    </div>
                    <div class="form-group">

                        <label>RACK NO</label>
                        <input type="text" name="rackNo" class="form-control" placeholder="RACK NO">
                        
                    </div>
                    <div class="form-group">

                        <label>ODF NO</label>
                        <input type="text" name="odfNo" class="form-control" placeholder="ODF NO">
                        
                    </div>
                    <div class="form-group">

                        <label>W NO</label>
                        <input type="text" name="wNo" class="form-control" placeholder="W NO">
                        
                    </div>
                    <div class="form-group">

                        <label>PORT NO</label>
                        <input type="text" name="portNo" class="form-control" placeholder="PORT NO">
                        
                    </div>
                    <div class="form-group">

                        <label>COMMENTS</label>
                        <input type="text" name="comments" class="form-control" placeholder="COMMENTS">
                        
                    </div>
                    
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit"  name="insertport" class="btn btn-primary">Save PORT</button>
                </div>

            </form>
                </div>
        </div>
    </div>





    <!--  edit Modal -->
    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content"> 
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">EDIT PORT DETAILS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <!--modal form-->
             <form action=" update.php" method="POST">
                <div class="modal-body">
                <input type="hidden" name="update_id" id="update_id">

                    <div class="form-group">

                        <label>CLIENT NAME</label>
                        <input type="text" name="clientName" id="clientName" class="form-control" placeholder="ENTER CLIENT NAME">
                        
                    </div>
                    <div class="form-group">

                        <label>POINT A - POINT B</label>
                        <input type="text" name="pointA_pointB" id="pointA_pointB" class="form-control" placeholder="POINT A - POINT B">
                        
                    </div>
                    <div class="form-group">

                        <label>RACK NO</label>
                        <input type="text" name="rackNo" id="rackNo" class="form-control" placeholder="RACK NO">
                        
                    </div>
                    <div class="form-group">

                        <label>ODF NO</label>
                        <input type="text" name="odfNo" id="odfNo" class="form-control" placeholder="ODF NO">
                        
                    </div>
                    <div class="form-group">

                        <label>W NO</label>
                        <input type="text" name="wNo" id="wNo" class="form-control" placeholder="W NO">
                        
                    </div>
                    <div class="form-group">

                        <label>PORT NO</label>
                        <input type="text" name="portNo"  id="portNo" class="form-control" placeholder="PORT NO">
                        
                    </div>
                    <div class="form-group">

                        <label>COMMENTS</label>
                        <input type="text" name="comments" id="comments" class="form-control" placeholder="COMMENTS">
                        
                    </div>
                    
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit"  name="updateport" class="btn btn-primary">Update PORT</button>
                </div>

            </form>
                </div>
            </div>
            </div>

 <!--  delete  Modal -->
 <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content"> 
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DELETE PORT DETAILS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <!--modal form-->
             <form action=" delete.php" method="POST">
                <div class="modal-body">
                <input type="hidden" name="delete_id" id="delete_id">

                   <h4>DO YOU WANT TO DELETE THIS DATA?? </h4>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                    <button type="submit"  name="deleteport" class="btn btn-primary">YES!!</button>
                </div>

            </form>
                </div>
            </div>
            </div>





    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2>PORT ASSIGNMENT</h2>
            </div>
            <div class="card">

                <div class="card-body">
                    <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#portaddModal">ADD PORT</button>
                </div>  

            </div>

            <div class="card">
                <div class="card-body">       

                     <?php
                        $conn=mysqli_connect("localhost","root","");
                        $db=mysqli_select_db($conn,'port');

                        $query = "SELECT * FROM assignment";
                        $query_run = mysqli_query($conn,$query);
                 ?> 

                <table id="porttableid" class="table table-striped table-dark">
                        <thead>
                            <tr>

                                <th scope="col">ID</th>
                                <th scope="col">CLIENT NAME</th>
                                <th scope="col">POINT A POINT B</th>
                                <th scope="col">RACK NO</th>
                                <th scope="col">ODF NO</th>
                                <th scope="col">W NO</th>
                                <th scope="col">PORT NO</th>
                                <th scope="col">COMMENTS</th>
                                <th scope="col">EDIT</th>
                                <th scope="col">DELETE</th>

                            </tr>
                        </thead>
                        <?php      
                        if($query_run)
                        {
                            foreach($query_run as $row)
                            {
                             
                        ?>   

                        <tbody>
                            <tr>

                                <td>   <?php  echo $row['id']; ?></td>
                                <td>   <?php  echo $row['clientName']; ?></td>
                                <td>   <?php  echo $row['pointA_pointB']; ?></td>
                                <td>   <?php  echo $row['rackNo']; ?></td>
                                <td>   <?php  echo $row['odfNo']; ?></td>
                                <td>   <?php  echo $row['wNo']; ?></td>
                                <td>   <?php  echo $row['portNo']; ?></td>
                                <td>   <?php  echo $row['comments']; ?></td>
                                <td>  
                                        <button type="button" class="btn btn-success editbtn">EDIT</button>
                                </td>
                                <td>  
                                        <button type="button" class="btn btn-danger deletebtn">DELETE</button>
                                </td>

                            </tr>
                        </tbody>

                        
                    <?php      
                          
                          }

                            }
                            else
                            {
                                    echo "NO record found";

                            }
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js" integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


<script>


              

            $(document).ready(function() {


                
                $('#porttableid').DataTable({
                    "pagingType": "full_numbers",
                    "lengthMenu" :[
                        [ 10,25,50,-1 ],
                        [ 10,25,50, "All"]
                    ],
                    responsive: true,
                    language: {
                       search: "_INPUT_",
                     searchPlaceholder: "Search Records",
                   }
             });

            } );

</script>


<script>

    $(document).ready(function() {
            $('.deletebtn').on('click',function(){

                $('#deletemodal').modal('show');


                    $tr =$(this).closest('tr');
                    var data = $tr.children('td').map(function(){
                        return $(this).text();
                    }).get();

                    console.log(data);

                    $('#delete_id').val(data[0]);


            });

    });
</script>




<script>

    $(document).ready(function() {
            $('.editbtn').on('click',function(){

                $('#editmodal').modal('show');


                    $tr =$(this).closest('tr');
                    var data = $tr.children('td').map(function(){
                        return $(this).text();
                    }).get();

                    console.log(data);

                    $('#update_id').val(data[0]);
                    $('#clientName').val(data[1]);
                    $('#pointA_pointB').val(data[2]);
                    $('#rackNo').val(data[3]);
                    $('#odfNo').val(data[4]);
                    $('#wNo').val(data[5]);
                    $('#portNo').val(data[6]);
                    $('#comments').val(data[7]);



            });

    });
</script>

</body>
</html>