<?php
session_start();

$_SESSION['admin_name'] = null;
$_SESSION['admin_firstname'] = null;
$_SESSION['admin_lastname'] = null;

header("Location:../index.php");