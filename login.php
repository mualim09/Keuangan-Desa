<?php
session_start();
if(isset($_SESSION['username'])) {
    header("Location: logout.php");
    die();
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Form</title>
 
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="stylesheet" href="baru/css/css/bootstrap.min.css">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <center>
    
<div class="container">
  <div class="row">
      <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-default">
              <div class="panel-heading"> <h1>LOGIN</h1>
 
              </div>
              <div class="panel-body">
                 <form action="ceklogin.php" method="POST">
                 
                      <div class="form-group">
                          <label class="col-sm-3 control-label">Username</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="username" name="username" placeholder="username" >
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">Password</label>
                          <div class="col-sm-9">
                              <input type="password" class="form-control" id="password" name="password" placeholder="password" >
                          </div>
                      </div>
                     
                      <div class="form-group last">
                          
                              <button type="submit" class="btn btn-success btn-sm">Sign in</button>
                              <button type="reset" class="btn btn-danger btn-sm">reset&nbsp;&nbsp;</button>
                         
                      </div>
                  
              </form>
              </div>
                        </div>
      </div>
  </div></div>
</center>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    </body>

    </html>
    <!-- end document-->