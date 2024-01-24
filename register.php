<?php

$connection = mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,"horizon");
$query="insert into application values ('$_POST[name]','$_POST[gender]',$_POST[age],'$_POST[email]',$_POST[phone],'$_POST[address]','$_POST[city]','$_POST[state]',$_POST[pin_code],'$_POST[country]','$_POST[date]','$_POST[prefered_slot]','$_POST[prefered_Test]')";
$query_run= mysqli_query($connection,$query);
   

?>

<script type="text/javascript">

    window.location.href="index.php"
    </script>

