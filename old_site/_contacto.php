<form name="formContacto" id="formContacto" action="contacto_grabar.php" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="left"><img src="images/tit_escribanos.gif" alt="ESCR&Iacute;BANOS" title="ESCR&Iacute;BANOS" /></td>
		</tr>
		<tr>
			<td height="12"></td>
		</tr>
		<tr>
			<td height="25" valign="top"><input type="text" name="nombre" id="nombre" class="input_gris default requerido" title="Nombre" /></td>
		</tr>
		<tr>
			<td height="25" valign="top"><input type="text" name="telefono" id="telefono" class="input_gris default requerido" title="Teléfono" /></td>
		</tr>
		<tr>
			<td height="25" valign="top"><input type="text" name="email" id="email" class="input_gris default requerido" title="Mail" /></td>
		</tr>
		<tr>
			<td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="135"><textarea id="mensaje" name="mensaje" class="input_gris default requerido" title="Mensaje" style="height:80px;"></textarea></td>
						<td valign="bottom" align="right"><a href="javascript:validarFormulario('formContacto');" title="Enviar"><img src="images/bt_enviar.gif" class="hover" width="23" height="23" alt="&gt;" title="Enviar" /></a></td>
					</tr>
				</table></td>
		</tr>
	</table>
</form>
