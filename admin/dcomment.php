<?php
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"tweetphp");
    $query = "delete from comments where id =$_GET[id]";
    $query_run=mysqli_query($connection,$query)
?>
<script type="text/javascript">
    alert("COMMENT Deleted Successfully...........")
    window.location.href="mcomment.php";
    </script>