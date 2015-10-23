<?php $this->load->helper('html','form');
 ?>
<head>
<title>Pagina de Exito</title>
</head>
<body>
<center>
<h1>Su archivo fue exitosamente subido! ó ¡¡ Su selección fue exitosa !!</h1>
<p>
<?php echo anchor('index.php/b_up_xml_controller2/index', heading('Subir otro archivo! ó ¡¡ Intentelo otra vez !!', 2) );
//$this->output->enable_profiler(TRUE);
?>
</p>
</center>
</body>
</html>
