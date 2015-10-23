<?php
$this->load->helper('html');
$this->load->helper('form');
$this->load->model('B_up_xml_model','b_up_xml_model');
echo br(1);
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++
echo heading('XML 2', 2);
?>
<TABLE BORDER=1 WIDTH="700">
<TR>
<TD WIDTH="400">UUID:
<?php echo $id_uuid;   ?>
</TD>
</TR>
</TABLE>

<TABLE BORDER=1 WIDTH="900">
<TR>
<?php
$cont=count($cantidad);
for ($i=0; $i<$cont; $i++){  ?>
<TD WIDTH="300">Cantidad:
<?php echo $cantidad[$i]; } ?>
</TD>
</TR>
</TABLE>

<TABLE BORDER=1 WIDTH="900">
<TR>
<?php
for ($i=0; $i<$cont; $i++){   ?>
<TD WIDTH="400">Descripción:<br><?php echo $descrip[$i];   }  ?></TD>
</TR>
</TABLE>
<BR><BR><HR>

<?php echo heading('Ingresar Productos', 2);
//********************************************
foreach ($cantidad as $key => $value) {
   //echo '<br><br>$cant_1 KEY:= '.$key.'  $cant_1 VALUE:= '.$value;

echo br(1).'LINEA DE PRODUCTO<hr>';
  for ($k=1; $k<=$value; $k++){
?>
<form method="post" accept-charset="utf-8" action="http://localhost/ci/index.php/b_up_xml_controller2/solicitar2" />
<?php
echo 'Valor a Ingresar: '.$k. '  de ';
echo form_label('Cantidad: ', 'cantidad');
 $datos_in_cantidad = array(
              'name'        => 'canti[]',
              'id'          => 'canti',
              'value'       => $value,
              'style'       => 'width:30',
            );
//$d_cantidad[$i]=$datos_in_cantidad;
echo form_input($datos_in_cantidad);

echo br(1);

echo form_label('Ingrese Número de Serie: ', 'numserie');
$datos_in_numserie = array(
             'name'        => 'noserie[]',
             'id'          => 'noserie',
             'value'       => '',
             'style'       => 'width:100',
           );

echo form_input($datos_in_numserie);
echo br(1);

?>
<!-- <CENTER> -->
<?php
//echo form_submit('Aceptar', 'Aceptar').form_reset('Reset', 'Reset');
?>
<!--
<form name="buttonbar">
<input type="button" value="Regresar" onClick="history.back()">
</form>
</CENTER>
-->
<?php
//echo form_close();

  }

}

?>
<CENTER>
<?php
$oc_cont = array('cont_datos_concepto' => $cont);
echo form_open('solicitar2', '', $oc_cont);

$oc_id = array('id_concepto' => $id_uuid);
echo form_open('solicitar2', '', $oc_id);

echo form_open('solicitar2', '', $cantidad);

echo form_submit('Aceptar', 'Aceptar').form_reset('Reset', 'Reset');
?>
<form name="buttonbar">
<input type="button" value="Regresar" onClick="history.back()">
</form>
</CENTER>
<?php
echo form_close();
echo br(2);
