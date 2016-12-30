<?php
session_start();
include "LIB/PHP/login.php";

if(isset($_SESSION['profilo'])){
	$tipoUtenteTmp = "" . $_SESSION['profilo'];
	echo "<html><body><form action='' method='post' >";
	echo "<input style='width:100px' type='submit' name='LogOut' value='LogOut' align='center' ></form>";
}else{
	echo "<html><body><form action='' method='post' >";
	echo "Username:<br><input type='text' name='username' size=12 ></input><br>";
	echo "Password:<br><input type='password' name='password' size=12 /><br>";
	echo "<input style='width:100px' type='submit' name='login' value='Login' align='center' ><br></form>";
}

// controlla accesso
// imposta layout accesso
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
</body>
<script>
function seleziona(pagina,profilo){
//alert(pagina);
if(profilo=='S'){
	parent.document.getElementById("dettaglio").src= "./WWW/utenti/" + pagina + "/index.php";
}else if(profilo=='B'){
	parent.document.getElementById("dettaglio").src= "./WWW/biblio/" + pagina + "/index.php";
}else{
	parent.document.getElementById("dettaglio").src= "./WWW/utenti/" + pagina + "/index.php";
}

}
</script>

</html>