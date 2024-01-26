<?php
session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"tweetphp");
$query = "update admin set name='$_POST[name]',email='$_POST[email]',password='$_POST[password]'";
$query_run = mysqli_query($connection, $query);

?>
<script type="text/javascript">
    alert("Updated Successfully");
    window.location.href="../dash.php";
</script>    
