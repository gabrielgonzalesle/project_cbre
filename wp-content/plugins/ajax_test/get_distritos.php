<?php  
/* 
Plugin Name: ajax test
Version: Current Version 
Author: Gabriel
Description: Para cargar dinamicamente departamentos, provincias y distritos
*/  
//filtro por clínica y especialidad
require_once('../../../wp-config.php');
global $wpdb;
$key_value = $_REQUEST["id"]; 
$province_id = $wpdb->get_results( 'SELECT id FROM province WHERE name = "'.$key_value.'" ');
$distritos = $wpdb->get_results( 'SELECT name FROM district WHERE province_id = "'.$province_id[0]->id.'" ');
	$data['out'] = "<option value='0'>Distrito</option>\n";
	$cont = 0;
	foreach ($distritos as $distrito) {
		if(isset($key_value)){
			$district_name = ucwords(mb_strtolower($distrito->name, 'UTF-8'));
			$name = str_replace(" ", "_", $distrito->name);
			$data['out'] = $data['out']."<option value=".(mb_strtolower($name, 'UTF-8'))." >".$district_name."</option>\n";
		}
	}
	echo json_encode($data);
	return;
?>
