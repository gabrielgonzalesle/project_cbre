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
$department_id = $wpdb->get_results( 'SELECT id FROM department WHERE name = "'.$key_value.'" ');
$provinces = $wpdb->get_results( 'SELECT name FROM province WHERE department_id = "'.$department_id[0]->id.'" ');
	$data['out'] = "<option value='0'>Provincia</option>\n";
	foreach ($provinces as $province) {
		if(isset($key_value)){
			$province_name = ucwords(mb_strtolower($province->name, 'UTF-8'));
			$name = str_replace(" ", "_", $province->name);
			$data['out'] = $data['out']."<option value=".(mb_strtolower($name, 'UTF-8'))." >".$province_name."</option>\n";
		}
	}
	echo json_encode($data);
	return;
?>
