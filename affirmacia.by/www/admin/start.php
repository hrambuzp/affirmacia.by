<?php
session_start();
include('../config.php');
include('../connect.php');
require_once "../function.php";
if ((checkUser($_SESSION["login"], $_SESSION["password"])) && (isAdmin($_SESSION["login"]))){
header("Location: /admin/index_admin.php");

}