<?php
include "headersp.php";
?>
<script>
function usSubmit(){
	if ((document.all.txtUSName.value == "") || (document.all.txtUSEmail.value == "") || (document.all.txtUSSubject.value == "") || (document.all.txtUSMessage.value == "")){
		alert("Informacion requerida");
	}
	else{
		document.all.txtTo.value = document.all.txtUSTo.value
		document.all.txtName.value = document.all.txtUSName.value
		document.all.txtEmail.value = document.all.txtUSEmail.value
		document.all.txtSubject.value = document.all.txtUSSubject.value
		document.all.txtMessage.value = document.all.txtUSMessage.value
		hiddenFrm.submit();
	}
}
function saSubmit(){
	if ((document.all.txtSAName.value == "") || (document.all.txtSAEmail.value == "") || (document.all.txtSASubject.value == "") || (document.all.txtSAMessage.value == "")){
		alert("Informacion requerida");
	}
	else{
		document.all.txtTo.value = document.all.txtSATo.value
		document.all.txtName.value = document.all.txtSAName.value
		document.all.txtEmail.value = document.all.txtSAEmail.value
		document.all.txtSubject.value = document.all.txtSASubject.value
		document.all.txtMessage.value = document.all.txtSAMessage.value
		hiddenFrm.submit();
	}
}

</script>
<form name="hiddenFrm" action="email.php" method="post">
<input type="hidden" name="txtTo">
<input type="hidden" name=txtName>
<input type="hidden" name="txtEmail" >
<input type="hidden" name=txtSubject>
<input type="hidden" name="txtMessage">
<input type="hidden" name="txtPage" value="spanish">
</form>
<form name="frmUS" action="email.php" method="post">
<table width=75%><tr>
<td><span class="caption">Contacto Mundial</span></td></tr><tr><td>&nbsp;</td></tr><tr><td valign="top" width=200>
<span class="caption">Estados Unidos</span></td>
<td><center>SEDE CENTRAL<br>
G.R. Enterprises Services<br>
4321 Kingwood Drive<br>
Ste. 150<br>
Kingwood, TX 77339 - USA<br>
(713) 875-4185<br>
</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>Nombre* </td>
<td><input type="hidden" name="txtUSTo" value="GREnterprises.International@gmail.com">
<input size=50 type="text" name=txtUSName></td></tr>
<tr><td>Su Correo Electr&oacute;nico* </td>
<td><input size=50 type="text" name=txtUSEmail></td></tr>
<tr><td>Sujeto* </td>
<td><input size=50 type="text" name=txtUSSubject></td></tr>
<tr><td>Mensaje* </td>
<td><textarea name="txtUSMessage" rows=5 cols=38></textarea></td></tr>
<tr><td /><td><input type=button name=cmdSubmit value="Enviar" onclick="usSubmit();"></td>
</tr></table>
</form>
<hr>
<form name="frm" action="email.php" method="post">
<table width=75%><tr>
<td valign="top" width=200><span class="caption">Am&eacute;rica del Sur</span></td>
<td><center>Servicios Inkari E.I.R.L<br>
Atencion: Ing. Victor Claudet Torres<br>
General Vidal 275 Lima 5 - PER&Uacute<br>
Telefonos: 424-5951 / 9975-35907<br>
Fax: 424-6133<br>
</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>Nombre* </td>
<td><input type="hidden" name="txtSATo" value="vcinkari@hotmail.com">
<input size=50 type="text" name=txtSAName></td></tr>
<tr><td>Su Correo Electr&oacute;nico* </td>
<td><input size=50 type="text" name=txtSAEmail></td></tr>
<tr><td>Sujeto* </td>
<td><input size=50 type="text" name=txtSASubject></td></tr>
<tr><td>Mensaje* </td>
<td><textarea name="txtSAMessage" rows=5 cols=38></textarea></td></tr>
<tr><td /><td><input type=button name=cmdSubmit value="Enviar" onclick="saSubmit();"></td>
</tr></table>
</form>


<?php
include "footersp.php";
?>