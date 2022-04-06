<?php
 include('db/connect.php');
 $query = "SELECT * FROM users";
 $result = mysqli_query($conn,$query);
 
?>
<html>
 <head>
     <title>Users Record</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/style.css">          
 </head>
 <body>
     <div class="row">
      <div class="container">
          <div class="row justify-content-md-center">
             <div class="col-10">
                <?php 
                  if(mysqli_num_rows($result)==0){
                      echo "NO RECORDS FOUND";
                  }else{ ?>
                        <table class="table">
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <?php
                                while($row=mysqli_fetch_assoc($result)){ ?>

                                <tr>
                                    <td><?php echo $row['fullName']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                </tr>

                               <?php  } ?>
                        
                        </table>

                  <?php }  

                ?>
             </div>
          </div>
      </div>
    </div>
 </body>
 <script src="js/bootstrap.min.js"></script>
</html>
