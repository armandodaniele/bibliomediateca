<?php
$tipoUtenteTmp = "" ;
if(isset($_SESSION['profilo'])){
	$tipoUtenteTmp = "" . $_SESSION['profilo'];
}
if($tipoUtenteTmp == "S" ) {
	?>
	<button style="width:100px" onclick="seleziona('ricerca')" >Ricerca</button>
<?php	
}else if($tipoUtenteTmp == "B" ) {
?>
	<button style="width:100px" onclick="seleziona('ricerca','B')" >Gestisci<br>Libri</button>
	<button style="width:100px" onclick="seleziona('prestiti','B')" >Gestisci<br>Prestiti</button>
	<button style="width:100px" onclick="seleziona('armadi','B')" >Gestisci<br>Armadi</button>
<?php	
}else if($tipoUtenteTmp == "D" ) {
?>
	<button style="width:100px" onclick="seleziona('digitali')" >Risorse<br>Digitali</button>
	<button style="width:100px" onclick="prenota()" >Gestisci<br>Prestiti</button>
	<button style="width:100px" onclick="recensioni()" >Gestisci<br>Recensioni</button>
<?php	
}else{
?>
	<button style="width:100px" onclick="seleziona('ricerca')" >Ricerca<br>Libri</button>

<?php	
}
?>
?>