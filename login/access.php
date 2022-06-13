<?php 
require_once "Cl/DBclass.php";
$correo = $_POST['email'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND password = '$password' ";
$query = mysqli_query($con, $sql);