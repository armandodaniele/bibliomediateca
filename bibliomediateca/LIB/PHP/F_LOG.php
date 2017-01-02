<?php
include 'SLIB/CFG/ini.php';
$AzioneTmp = $_GET['Azione'];
$conn = @mysql_connect($DB_host, $DB_user, $DB_pass);
mysql_select_db($DB_name);

$codTmp  = date('ymdHis'). $_SESSION['sigla'] ;

$queryCampiTmp = "INSERT INTO log (ID_log,azione,valore,data,id_utenti,contesto)";

$queryValoriTmp = " VALUES ('" . $codTmp . "','" . $AzioneTmp . "','" . $_SERVER['REMOTE_ADDR'] . "','" . date('Ymd') . "','" . $_SESSION['utente'] . "','" . $_SERVER['HTTP_USER_AGENT'] . "');" ;

$queryCampiTmp = $queryCampiTmp .  $queryValoriTmp ;
$result = mysql_query($queryCampiTmp) ;

?>