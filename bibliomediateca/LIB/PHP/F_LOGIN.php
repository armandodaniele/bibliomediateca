<?php
	include 'SLIB/CFG/ini.php';
		if(!isset($_POST['username'])){
			unset($_SESSION['classe'] );
			unset($_SESSION['profilo']) ;
			unset($_SESSION['user']) ;
			return;
		}else if(strlen($_POST['username'])<1){
			return;
		}
//------------------
$conn = @mysql_connect($DB_host, $DB_user, $DB_pass);
mysql_select_db($DB_name);
//------------------
$codTmp  = date('ymdHis'). $_SESSION['sigla'] ;
$queryCampiTmp = "INSERT INTO log (ID_log,azione,valore,data,id_utenti,contesto)";

$queryValoriTmp = " VALUES ('" . $codTmp . "','LOGIN','" .$_POST['username'] . "','" . date('Ymd') . "','','');" ;

$queryCampiTmp = $queryCampiTmp .  $queryValoriTmp ;
$result = mysql_query($queryCampiTmp) ;

		$user = trim($_POST['username']);
		$pass = trim($_POST['password']);
		if(!$user || !$pass){
			echo("DATI MANCANTI");
			return ;
		}

		$conn = @mysql_connect($DB_host, $DB_user, $DB_pass);
		$db = mysql_select_db($DB_name);
		if(!$conn){
			echo("Manca connessione col db");
			return;
		}				
		$user = mysql_real_escape_string($user);
		$pass = mysql_real_escape_string($pass);
		$queryTmp = "SELECT * FROM utenti WHERE username ='$user' AND ( password = '$pass' OR password = '" . md5($pass) . "')";
		$result=mysql_query($queryTmp);
		$row=mysql_fetch_array($result);
		if(!$row){
			echo("Utente non registrato" );
			return;
		}else{
			$_SESSION['classe'] = $row['classe'];
			$_SESSION['profilo'] = $row['profilo'];
			$_SESSION['user'] = $row['username'];
			
		}
?>