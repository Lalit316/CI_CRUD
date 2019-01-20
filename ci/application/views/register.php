<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register page</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--   [if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif] -->
  </head> 
  <body class="container">
          
      <div class="col-lg-7 col-lg-offset-4">
            <h1>Register page:</h1>
            <p>Fill in the details to run our website!!!</p> 
          <?php if(isset($_SESSION['success'])){ ?>
                <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
            <?php 
          } ?>
          <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
        <form action="" method="POST">
           <div class="form-group row">
                 <label for="username" class="col-sm-2 col-form-label">Username:</label>
               <div class="col-sm-8">
                 <input class="form-control" name="username" id="username" type="text">
               </div>
           </div>

            <div class="form-group row">
                 <label for="fname" class="col-sm-2 col-form-label">First Name:</label>
               <div class="col-sm-8">
                 <input class="form-control" name="fname" id="fname" type="text">
               </div>
           </div>

            <div class="form-group row">
                 <label for="lname" class="col-sm-2 col-form-label">Last Name:</label>
               <div class="col-sm-8">
                 <input class="form-control" name="lname" id="lname" type="text">
               </div>
           </div>

            <div class="form-group row">
                 <label for="email" class="col-sm-2 col-form-label">Email:</label>
               <div class="col-sm-8">
                 <input class="form-control" name="email" id="email" type="text">
               </div>       
            </div>

            <div class="form-group row">
                 <label for="dob" class="col-sm-2 col-form-label">Date of Birth:</label>
               <div class="col-sm-8">
                 <input class="form-control" name="dob" id="dob" type="text">
               </div>
           </div>

            <div class="form-group row">
                 <label for="password" class="col-sm-2 col-form-label">Password:</label>
               <div class="col-sm-8">
                 <input class="form-control" name="password" id="password" type="password">
               </div>
           </div>

           <div class="form-group row">
                 <label for="password" class="col-sm-2 col-form-label">Confirm Password:</label>
               <div class="col-sm-8">
                 <input class="form-control" name="password2" id="password" type="password">
               </div>
           </div>

           <div class="form-group row">
                 <label for="phone" class="col-sm-2 col-form-label">Phone:</label>
               <div class="col-sm-8">
                 <input class="form-control" name="phone" id="phone" type="text"  >
               </div>
           </div>

           <div class="text-center">
              <button class="btn btn-primary btn-sx" name="register">Register</button>
          </div>
         </form> 
     </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<? php echo base_url(); ?>js/bootstrap.min.js"></script>
  </body>
</html>