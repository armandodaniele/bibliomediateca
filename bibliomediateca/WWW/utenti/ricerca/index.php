<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<link type='text/css' rel='stylesheet' href='../../../STILI/stile.css'>
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="content-type">
</head>
<button onClick=info() >INFO</button><br>
<body background='../../../STILI/IMMAGINI/corpo1.png' >
Seleziona genere:<Select id='generi' onChange=recuperaElenco('generi') >
<?php include '../../../LIB/PHP/recuperaGeneri.php'; ?>
</select><br>

Autori:<Select id='autori' onChange=recuperaElenco('autori') >
<option value='' >Seleziona</option>
<?php include '../../../LIB/PHP/recuperaAlfabeto.php'; ?>
</select>

Armadi (Dewey):<Select id='collocazione' onChange=recuperaElenco('collocazione') >
<?php include '../../../LIB/PHP/recuperaCollocazione.php'; ?>
<option value='' >Seleziona</option></select><br>
Editori:<Select id='editori' onChange=recuperaElenco('editori') >
<?php include '../../../LIB/PHP/recuperaEditori.php'; ?>
<option value='' >Seleziona</option></select><br>
Codice o Parole chiave:<input  onkeydown="if(event.keyCode==13) ricerca()" id='parole' />
campo ricerca:<Select id='campo' >
<option value='titolo' >Codice/Titolo</option><option value='autore' >Autore</option><option value='genere' >Genere</option><option value='collocazione' >Posizione</option></select><button onClick=ricerca() >Cerca</button>
<br>
<br> <br>

<?php
// 

if( !isset($_GET['azione']) ){

}else if($_GET['azione'] == "editori"){
echo "<button onClick=recuperaElenco(" . $_GET['azione'] . ") >Next</button><BR>";
include "../../../LIB/PHP/recuperaLibriEditori.php";
//?codice='" . $_GET['codice'] . "'";

}else if($_GET['azione'] == "autori"){
echo "<button onClick=recuperaElenco(" . $_GET['azione'] . ") >Next</button><BR>";
include "../../../LIB/PHP/recuperaLibriAutori.php";
}else if($_GET['azione'] == "generi"){
echo "<button onClick=recuperaElenco(" . $_GET['azione'] . ") >Next</button><BR>";
include "../../../LIB/PHP/recuperaLibriGeneri.php";
}else if($_GET['azione'] > "ric"){
echo "<button onClick=ricerca(" . $_GET['azione'] . ") >Next</button><BR>";
include "../../../LIB/PHP/ricercaLiberaLibri.php";
}else{
include "../../../LIB/PHP/ritardi.php";
}

echo "<br>risultato ricerca libri";


?>


</body>
</html>
<script type="text/javascript" >

function ricerca(){
codiceTmp = document.getElementById("parole").value;
if(codiceTmp.length < 3){
alert("almeno tre caratteri");
return;
}
azioneTmp = "ricerca_" + document.getElementById("campo").value;
this.location.href =  "index.php?azione=" + azioneTmp + "&codice=" + codiceTmp + "&progressivo=0";
}

function recuperaElenco(azione){
if (azione == 'editori'){
codiceTmp = document.getElementById("editori").value;
this.location.href =  "index.php?azione=" + azione + "&codice=" + codiceTmp + "&progressivo=0";
}else if(azione == 'generi'){
codiceTmp = document.getElementById("generi").value;
this.location.href =  "index.php?azione=" + azione + "&codice=" + codiceTmp + "&progressivo=0";
}else if(azione == 'autori'){
codiceTmp = document.getElementById("autori").value;
this.location.href =  "index.php?azione=" + azione + "&codice=" + codiceTmp + "&progressivo=0";
}
}

function aggiungiLibro(){
this.location.href = "info.php"; 
}


function selezione(codice,contesto){
//alert(codice);
this.location.href = "dettaglio.php?codice=" + codice ; 
}

function info(){
//alert(codice);
this.location.href = "../../../doc/PRESTITO_LIBRI_BIBLIOTECA.pdf" ; 
}

</script>