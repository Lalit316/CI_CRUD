<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profile</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--   [if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif] -->
  </head>  
  <body>
        
      <div class="col-lg-8 col-lg-offset-2 ">
            <h1>Welcome</h1>
          <?php if(isset($_SESSION['success'])){ ?>
                <div class="alert alert-success"> <?php echo $_SESSION['success'];  ?></div>
            <?php 
          } ?>
          <h4>HELLO, <?php echo $_SESSION['username'];?></h4>
          <div>
            <div>
              <?php echo anchor("user/create", 'Create',['class'=>'btn btn-primary']); ?>
            </div>

          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Date of birth</th>
                <th>Phone</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <?php if(count($records)): ?>
                <?php foreach ($records as $record):?>
                  <tr>
                    <td><?php echo $record->fname; ?></td>
                    <td><?php echo $record->lname; ?></td>
                    <td><?php echo $record->email; ?></td>
                    <td><?php echo $record->dob; ?></td>
                    <td><?php echo $record->phone; ?></td>
                    <td><?php echo anchor("user/edit/{$record->user_id}", 'Update',['class'=>'btn btn-success']); ?></td>
                    <td><?php echo anchor("user/delete/{$record->user_id}",'Delete',['class'=>'btn btn-danger']); ?></td>
                  </tr>
               <?php endforeach;?>
               <?php else: ?>
                <tr>No records found</tr>
              <?php endif; ?>

            </tbody>
          </table> 
          </div>
           <a class="btn btn-danger" href="<?php echo base_url();?>index.php/user/logout" role="button">Logout</a>
       </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<? php echo base_url(); ?>js/bootstrap.min.js"></script>
  </body>
</html>