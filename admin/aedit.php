<?php
session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"tweetphp");
$query = "select * from admin where email = '$_SESSION[email]'";
$query_run = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($query_run)){
    $name=$row['name'];
    $email=$row['email'];
    $password=$row['password'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
<style>
body
{
    background-image: url("c.jpg");
    background-size: cover;
}

.box
{
    height:500px;
    width: 1300px;
    background-color: #030002;
    margin: auto;
    opacity:.8;
    color:white;
}
</style>
<title>Admin Profile</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="../assets/images/twitter-logo.png" height="40" length="20">
                <a class="navbar-brand active"> TWEETBOOK- Explore your world </a>
            </div>
            <font style="color:white"><span><strong>Welcome: <?php echo $_SESSION['name']; ?></strong></span></font>
            <font style="color:white"><span><strong>Email: <?php echo $_SESSION['email']; ?></strong></span></font>
            <ul class="nav navbar-nav navbar-right">
            <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="admin/aedit.php">Edit Profile</a>
                <li class="nav-item"><a class="nav-link" href="../includes/logout.php">Logout</a></li>
            </ul> 
        </div>
    </nav><br>
    <div class="box">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                    <h1 style="text-align:center;font-size:35px";>EDIT YOUR PROFILE </h1>  
                        <form action="update.php" method="POST">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control" value="<?php echo $name; ?>" name="name"><br>
                                <label>Email:</label>
                                <input type="text" class="form-control" value="<?php echo $email; ?>" name="email"><br>
                                <label>Password:</label>
                                <input type="text" class="form-control" value="<?php echo $password; ?>" name="password"><br>
                                <button type="submit" name="update" class="btn btn-primary">Update</button>

                            </div>
                        </form>    
                    </div>
                    <div class="col-md-2"></div>
                 </div>
            </div><br>



</body>
</html>