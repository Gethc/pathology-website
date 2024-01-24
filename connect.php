<?php
error_reporting(0);
$connection = mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,"horizon");
$query="insert into Signup values ('$_POST[username]','$_POST[email]','$_POST[password]')";
$query_run= mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Login Successfully")
    window.location.href="index.php"
    </script>