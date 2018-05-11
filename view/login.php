<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
        

	<link rel="stylesheet" type="text/css" href="styles.css">
        <style>

</style>
</head>
<body>
   
<div class="container">
     
       <div class="row" style="margin-top: 50px">
           
            <div class="col-sm-4"></div>
           
            <div class="col-sm-4">
                 <form class="form-signin" method="POST">
                <input type="hidden" name="action" class="form-control" value="login">
                <input type="hidden" name="method" class="form-control" value="doRegister">
                <h2 class="form-signin-heading">Please Login</h2>
            <div class="form-group">
		  <!--<span class="input-group-addon" id="basic-addon1">@</span>-->
                <label for="name">Username</label>
		  <input type="text" name="username" class="form-control" placeholder="Username" required>
		</div>
                <div class="form-group">
		  <!--<span class="input-group-addon" id="basic-addon1">@</span>-->
                <label for="inputPassword">Password</label>
		  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
		</div>
                <button class="btn btn-md btn-primary " type="submit">Login</button>
                
                <a class="pull-right" href="index.php?action=login&method=register">Register</a>
                      </form>
                <div class="form-group">
                <?php if(isset($smsg)){ ?><div class="alert alert-success alert-dismissible" > <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $smsg; ?> </div><?php } ?>
                <?php if(isset($fmsg)){ ?><div class="alert alert-danger alert-dismissible" ><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php echo $fmsg; ?> </div><?php } ?>
                </div>
                </div>
            <div class="col-sm-4">
                
            </div>
        </div>
</div>
      
</body>
</html>