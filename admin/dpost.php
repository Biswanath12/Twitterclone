<?php
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"tweetphp");
    $query = "delete from tweets where post_id =$_GET[pid]";
    $query_run=mysqli_query($connection,$query)
?>
<script type="text/javascript">
    alert("POST Deleted Successfully...........")
    window.location.href="mpost.php";
    </script>