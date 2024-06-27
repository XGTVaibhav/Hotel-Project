<html>
    <head>
        <title>Display1</title>
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


$query= "SELECT * FROM visitform";
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
             <th width="15%">Email</th>
             <th width="10%">Subject</th>
             <th width="20%">Comment</th>
             <th width="10%">Status</th>

          </tr>
        </thead>
        <tbody>
      
           <?php
           
              while ($result = mysqli_fetch_assoc($data)){
            
             echo "<tr>
                       <td>".$result['id']."</td>
                       <td>".$result['Name']."</td>
                       <td>".$result['Email']."</td>
                       <td>".$result['Subject']."</td>
                       <td>".$result['Comment']."</td>

                      <td><a href='update1.php?id=$result[id]'>Update</a>
                      
                      <a href='delete1.php?id=$result[id]' onclick='return checkdelete()'>Delete</a></td>

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
