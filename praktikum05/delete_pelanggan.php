<?php 
require_once 'dbkoneksi.php';

$idde1 = $_GET['idde1'];
$query = "DELETE FROM pelanggan WHERE id= ?";
$delete = $dbh->prepare($query);
$delete->execute([$idde1]);

header('location:list_pelanggan.php');
?>