<?php
$link=mysqli_connect("localhost","root","");
if(!$link)
die ("Error:".mysqli_connect_error());
$sql="CREATE DATABASE www_project";
?>