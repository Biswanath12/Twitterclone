<?php
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"tweetphp");
    $query = "delete from users where id =$_GET[id]";
    $query_run=mysqli_query($connection,$query)
?>
<script type="text/javascript">
    alert("USER Deleted Successfully...........")
    window.location.href="muser.php";
    </script>