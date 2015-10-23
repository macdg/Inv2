<?php

class B_up_xml_model extends CI_Model {

 public function __construct()
 {
 parent::__construct();
$this->load->model('B_up_xml_model','b_up_xml_model');

 }

// public function concepto_data_insert($id_uuid, $cantidad, $unidad, $descrip, $val_unit) {

// $datos_concepto=array(
// 'id_uuid' => $id_uuid,
// 'cantidad' => $cantidad,
// 'unidad' => $unidad,
// 'descrip' => $descrip,
// 'val_unit' => $val_unit,
// 	 );

// $this->db->insert('concepto',$datos_concepto);

// } //Fin de concepto_data_insert();


public function proveedor_data_insert($id_rfc, $rfc_nom, $calle, $no_ext, $no_int, $colonia, $referen, $mun, $estado, 	$pais, $cp, $id_uuid) {

$datos_proveedor=array(
'id_rfc' => 	$id_rfc,
'rfc_nom' =>	$rfc_nom,
'calle' =>	$calle,
'no_ext' =>	$no_ext,
'no_int' =>	$no_int,
'colonia' =>	$colonia,
'referen' =>	$referen,
'mun' =>	$mun,
'estado' =>	$estado,
'pais' =>	$pais,
'cp' =>	$cp,
'id_uuid' => $id_uuid
	);

$this->db->insert('proveedor',$datos_proveedor);


}  //Fin de proveedor_data_insert();


public function factura_data_insert($id_uuid, $rfc_nom, $fecha, $subtotal, $moneda, $total, $id_rfc) {

$datos_factura=array(
'id_uuid'	=> $id_uuid,
'rfc_nom' =>	$rfc_nom,
'fecha' => $fecha,
'subtotal' => $subtotal,
'moneda' => $moneda,
'total' => $total,
'id_rfc' => 	$id_rfc
	);

$this->db->insert('factura',$datos_factura);

// $this->load->view('pagina_exito');
}  //Fin de factura_data_insert();


// public function productos_data_insert($cantidad, $noserie) {

// $datos_productos=array(
// 'cantidad' => $cantidad,
// 'unidad' =>	$unidad,
// 'modelo' => $modelo,
// 'descripcion' => $descripcion,
// 'valorunitario' => $valorunitario,
// 'fecha_ingreso' => $fecha_ingreso,
// 'noserie' => $noserie,
// 'nopieza' => $nopieza
// 	);

// $this->db->insert('productos',$datos_productos);

// //$this->load->view('up_xml_view1');

// $this->load->view('pagina_exito');
// }



// public function concepto_data_insert_mult($id_uuid, $cantidad, $unidad, $descrip, $val_unit) {

// $datos_concepto=array(
// 'id_uuid' => $id_uuid,
// 'cantidad' => $cantidad,
// 'unidad' => $unidad,
// 'descrip' => $descrip,
// 'val_unit' => $val_unit,
// 	 );

// $this->db->insert('concepto',$datos_concepto);

// echo $this->x_x();

// } //Fin de concepto_data_insert_mult();





public function solicita_productos_insert($cantidad, $noserie) {

// $this->db->update('productos', $cantidad, "id =$cantidad");

$datos_productos=array(
// 'id_uuid' => $id_uuid,
'cantidad'=> $cantidad,
'noserie' => $noserie
	 );

$this->db->insert('productos',$datos_productos);

} //Fin de concepto_data_insert();




}