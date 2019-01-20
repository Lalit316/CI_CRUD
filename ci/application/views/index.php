<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>index</title>

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

       <div class="col-sm-8 col-md-8 col-md-offset-2 centered" style='background-color:#f5f5f0; border-radius: 5px;'>
            <h1>Login and Registration Form using Codeigniter</h1>
          <br><br>
          <div>
            <a class="btn btn-primary" href="<?php echo base_url();?>index.php/user/login" role="button">Login</a>
          </div>
          <br>
          <div>
            <a class="btn btn-primary" href="<?php echo base_url();?>index.php/user/register" role="button">Register</a>
          </div>
          <br>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<? php echo base_url(); ?>js/bootstrap.min.js"></script>
  </body>
</html>