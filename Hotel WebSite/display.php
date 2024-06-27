<html>
    <head>
        <title>Display</title>
        <style>
            body{
                background-color:;
            }
            table{
                background-color:#dbdae6;
            }
            h2{
                font-family:"Sofia", sans-serif;
                color:#e094d;
            }
            th{
                background-color:#74d16f;
            }
            td{
                font-family:"Sofia", sans-serif;
                color:#e094d; 
                background-color:#dbdae6;
 
                
            }
            
        </style>
  </head>

<?php

error_reporting(1);

include("connection.php");


$query= "SELECT * FROM contact";
$data= mysqli_query($conn, $query);

$total= mysqli_num_rows($data);

 if($total != 0)
 {
   ?>

 <h2 align="center"><strong>Contact Details:-</strong></h2>
 <center>
    <table border="1" cellspacing="5" width="100%">
        <thead>
          <tr>
             <th width="5%">ID</th>
             <th width="17%">Name</th>
             <th width="10%">Contact NO</th>
             <th width="15%">Email</th>
             <th width="10%">Booking Date</th>
             <th width="5%">People</th>
             <th width="7%">Rooms</th>   
             <th width="10%">Status</th>

          </tr>
        </thead>
        <tbody>
      
           <?php
           
              while ($result = mysqli_fetch_assoc($data)){
            
             echo "<tr>
                       <td>".$result['id']."</td>
                       <td>".$result['name']."</td>
                       <td>".$result['contactno']."</td>
                       <td>".$result['email']."</td>
                       <td>".$result['bookingdate']."</td>
                       <td>".$result['people']."</td>
                       <td>".$result['rooms']."</td>


                      <td><a href='update.php?id=$result[id]'>Update</a>
                      
                      <a href='delete.php?id=$result[id]' onclick='return checkdelete()'>Delete</a></td>

                    </tr>";
                  }
               
  if($data){
    //echo "data insert sucessfuly";

        
    }
    else{
      echo "data do not insert";
  
    }
  }
  ?>
        </tbody>

       
</table>

<script>

    function checkdelete()
    {
        return confirm('are you sure you want to delete this record ?');
    }


</script>
</html>
