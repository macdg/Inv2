<?php $this->load->helper('form'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Vista de Up XML</title>
</head>
<body>

	<hr>
	<br><br>
	<center>
	Elije el archivo XML a subir.
	<br><br><br>
	XML Seleccionado.
	<br>
	<form action="<?php echo 'subiendo_archivo'; ?>" method="post" enctype="multipart/form-data">
		Selecciona el archivo a Subir.
		<br><br><br>
		<input type="file" name="mi_archivo_1" id="m_archivo_1" size="40">
		<br>
		<input type="submit" value="Subir" name="submit">
		<?php
		//$dato_check=$this->input->post('mi_check');
		//$oculto= array('mi_check' => $dato_check);
		//echo form_open('subiendo_archivo','',$oculto);
		?>
		<br><br>
	</form>
</center>
<br><br><br>
<center>
<form name="buttonbar">
<input type="button" value="Borrar" onClick="location='index'"/>
<!--
<input type="button" value="Volver" onClick="history.back()">
-->
</form>
</center>

</body>
</html>
