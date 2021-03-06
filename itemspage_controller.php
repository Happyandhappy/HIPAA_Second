<?php
include('layout/header.php');
$api = $_SESSION['api'];
$type = "";
if (isset($_GET['type'])) $type = $_GET['type'];
$tabledata = array();
$tablekeys = array();
switch ($type) {
	case 'device-registry':
		$res = $api->_AllObjects('contact')->data;
		$contacts = array();
		foreach ($res as $key => $value) {
			$contacts[$key] = $value->Full_Name;
		}

		$res = $api->_AllObjects('facility')->data;
		$facilities = array();
		foreach ($res as $key => $value) {
			$facilities[$key] = $value->Name;
		}

		$res = $api->_AllObjects($type);
		foreach ($res->data as $key => $value) {
			$value->id = $key;
			if (array_key_exists($value->Assigned_Facility, $facilities))$value->Assigned_Facility = $facilities[$value->Assigned_Facility];
			else $value->Assigned_Facility = "";
			if (array_key_exists($value->User_assigned, $contacts))$value->User_assigned = $contacts[$value->User_assigned];
			else $value->User_assigned = "";
			array_push($tabledata, $value);
		}

		$tablekeys = ["Name","Active", "Assigned_Facility","User_assigned", "IP_Address", "Last_Polling_Time","Polling_Time"];
		break;	
	default:		
		break;
}
?>
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<?php if ($type != "") include('layout/pages/management.php');?>
	</div>	
<?php include('layout/footer.php'); ?>

