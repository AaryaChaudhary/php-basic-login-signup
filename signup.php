<html>
 <head>
     <title>Signup</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/style.css">          
 </head>
 <body>
     <div class="row">
      <div class="container">
          <div class="row justify-content-md-center">
              <div class="col-6">
                <div class="card">
                    <div class="card-body">
                     <form method="post" action="db/signup.php">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="fname" class="form-control" placeholder="Enter Full Name>
                        </div> 
                          <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter Address">
                        </div> 
                          <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="email@gmail.com">
                        </div> 
                          <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="pass1" class="form-control" placeholder="******">
                        </div> 
                          <div class="mb-3">
                            <label class="form-label">Password Confirmation</label>
                            <input type="password" name="pass2" class="form-control" placeholder="*******">
                        </div> 
                        <button type="submit" class="btn btn-success">Signup</button>
                        

                     </form>

                     <?php

                        if(isset($_GET['errmsg'])){ ?>
                          <div class="alert alert-danger">
                              <?php echo $_GET['errmsg']; ?>
                          </div>
                      <?php  }
                     ?>
                    </div>
                 </div>
              </div>
          </div>
      </div>
    </div>
 </body>
 <script src="js/bootstrap.min.js"></script>
</html>
