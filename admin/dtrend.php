<?php
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"tweetphp");
    $query = "delete from trends where id =$_GET[id]";
    $query_run=mysqli_query($connection,$query)
?>
<script type="text/javascript">
    alert("TREND Deleted Successfully...........")
    window.location.href="mtrend.php";
    </script>