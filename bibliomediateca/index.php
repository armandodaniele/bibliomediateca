<html>
<head>
<link type='text/css' rel='stylesheet' href='./STILI/stile.css'>
<title>BiblioMediaTeca</title>
</head>
<body style="width:100%;height:100%" >
<table  style="width:100%;height:90%" >
<tr><td colspan=2 align=center >
Mediateca e biblioteca  
</td></tr>
<tr><td  style="width:120px;height:100%" >
<iframe id='menu' src="loginMenu.php"  style="width:120px;height:100%" ></iframe>
</td><td>
<iframe id='dettaglio' src="WWW/utenti/ricerca/index.php"  style="width:100%;height:100%" ></iframe>
</td></tr>
</table>
Sorgente gestione biblioteca e media gratuito.	Consentiti utilizzi a livello, personale, educativo e commerciale.<br>
Sono consentite copie/implementazioni del codice a condizione di non ocultare/rimuovere questo avviso<br>
(Licenza GNU by Armando Daniele info@aixt.net)Nelle integrazioni del prodotto vanno indicati gli autori<br>
</body>
</html>
<?php

include 'LIB/CFG/ini.php';
$conn = @mysql_connect($DB_host, $DB_user, $DB_pass);
mysql_select_db($DB_name);

$codTmp  = date('ymdHis'). $_SESSION['sigla'] ;

$queryCampiTmp = "INSERT INTO log (ID_log,azione,valore,data,id_utenti,contesto)";

$queryValoriTmp = " VALUES ('" . $codTmp . "','ACCESSO','" . $_SERVER['REMOTE_ADDR'] . "','" . date('Ymd') . "','" . $_SESSION['utente'] . "','" . $_SERVER['HTTP_USER_AGENT'] . "');" ;

$queryCampiTmp = $queryCampiTmp .  $queryValoriTmp ;
$result = mysql_query($queryCampiTmp) ;

?>