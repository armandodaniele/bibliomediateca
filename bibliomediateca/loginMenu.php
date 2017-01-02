<?php
session_start();
include "LIB/PHP/F_LOGIN.php";


// controlla accesso
// imposta layout accesso

include "LIB/PHP/F_MENU.php";
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