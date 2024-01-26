<?php
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"tweetphp");
    $query = "delete from retweets where post_id =$_GET[post_id]";
    $query_run=mysqli_query($connection,$query)
?>
<script type="text/javascript">
    alert("Shared POST Deleted Successfully...........")
    window.location.href="mshare.php";
    </script>