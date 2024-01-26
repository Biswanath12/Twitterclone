<?php
    session_start();
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
    height:800px;
    width: 1100px;
    background-color: #030002;
    margin: auto;
    opacity:.8;
    color:white;
}
</style>
<title>Manage Comments</title>
<link rel="shortcut icon" type="image/png" href="../assets/images/twitter.svg"> 
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
                <li class="nav-item"><a class="nav-link" href="includes/logout.php">Logout</a></li>
            </ul> 
        </div>
    </nav><br>
	<div class="box"><br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
        <h1 style="text-align:center;font-size:35px";>SHOW ALL COMMENTS </h1> 
			<table class="table-bordered" width="900px" style="text-align:center">
				<thead>
					<tr>
						<th>ID</th>
						<th>Comment</th>
						<th>User ID</th>
						<th>Post ID</th>
						<th>Time</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"tweetphp");
					$query = "select * from comments";
					$query_run=mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['comment']; ?></td>
						<td><?php echo $row['user_id']; ?></td>
						<td><?php echo $row['post_id']; ?></td>
						<td><?php echo $row['time']; ?></td>
						<td>
							<button class="btn" name=""><a href="dcomment.php?id=<?php echo $row['id']; ?>">Delete</a></button>
						</td>
						</tr>
						<?php
					}
				?>
			</table>
		</div>
		<div class="col-md-1"></div>
	</div>
				</div>

</body>
</html>