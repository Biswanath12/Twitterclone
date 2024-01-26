<?php
include('admin/functions.php');
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
<style>
body
{
    background-image: url("admin/b.jpg");
    background-size: cover;
}
</style>
<title>Admin Dashboard</title>
<link rel="shortcut icon" type="image/png" href="assets/images/twitter.svg"> 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="assets/images/twitter-logo.png" height="40" length="20">
                <a class="navbar-brand active"> TWEETBOOK- Explore your world </a>
            </div>
            <font style="color:white"><span><strong>Welcome: <?php echo $_SESSION['name']; ?></strong></span></font>
            <font style="color:white"><span><strong>Email: <?php echo $_SESSION['email']; ?></strong></span></font>
            <ul class="nav navbar-nav navbar-right">
            <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="admin/aedit.php" target="_blank">Edit Profile</a>
                <li class="nav-item"><a class="nav-link" href="includes/logout.php">Logout</a></li>
            </ul> 
        </div>
    </nav>

    <br><br><br>
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-light" style="width:300px">
            <div class="card header">Registered Users:</div>
                <div class="card-body">
                    <p class="card-text">No. of total Users: <?php echo get_users_count() ?> </p>
                    <a href="admin/muser.php" class="btn btn-danger" target="_blank">view Registered Users</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light" style="width:300px">
            <div class="card header">Registered Posts:</div>
                <div class="card-body">
                    <p class="card-text">No. of total posts: <?php echo get_tweets_count() ?></p>
                    <a href="admin/mpost.php" class="btn btn-warning" target="_blank">view Registered Posts</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light" style="width:300px">
            <div class="card header">Total Comments:</div>
                <div class="card-body">
                    <p class="card-text">No. of total Comments:<?php echo get_comments_count() ?></p>
                    <a href="admin/mcomment.php" class="btn btn-primary" target="_blank">view Registered Comments</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light" style="width:300px">
            <div class="card header">Total Shares:</div>
                <div class="card-body">
                    <p class="card-text">No. of Shares: <?php echo get_retweets_count() ?></p>
                    <a href="admin/mshare.php" class="btn btn-secondary" target="_blank">view all Shares</a>
                </div>
            </div>
        </div> 
</div><br><br>
<div class="row">
        <div class="col-md-3">
            <div class="card bg-light" style="width:300px">
            <div class="card header">Registered Trends:</div>
                <div class="card-body">
                    <p class="card-text">No. of Trends: <?php echo get_trends_count() ?></p>
                    <a href="admin/mtrend.php" class="btn btn-success" target="_blank">view all Trends</a>
                </div>
            </div>
        </div>
        

        
    </div>




</body>
</html>