<html>
 <head>
     <title>Login</title>
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
                     <form method="post" action="db/check.php">
                        
                          <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="email@gmail.com">
                        </div> 
                          <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="pass1" class="form-control" placeholder="******">
                        </div> 
                          
                        <button type="submit" class="btn btn-success">Login</button>
                        

                     </form>

                     <?php

                        if(isset($_GET['errmsg'])){ ?>
                          <div class="alert alert-danger">
                              <?php echo $_GET['errmsg']; ?>
                          </div>
                      <?php  }
                     ?>
                     <?php

                        if(isset($_GET['msg'])){ ?>
                          <div class="alert alert-success">
                              <?php echo $_GET['msg']; ?>
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
