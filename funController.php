<?php
require_once('ApiClient/Client.php');

function login($cred){
	session_unset();
	if (isset($cred['email']) && isset($cred['password']) && isset($cred['orgid'])){
		$_SESSION['USERNAME'] = $cred['email'];
		$_SESSION['PASSWORD'] = $cred['password'];
		$_SESSION['ORGID'] = $cred['orgid'];
		$api = new ApiClient($_SESSION['ORGID'], $_SESSION['USERNAME'], $_SESSION['PASSWORD'], CLIENTID, CLIENTSECURITY);

		if ($api->Login()) {			
			$_SESSION['api'] = $api;
			return array('status' => 'success','message' => 'Successfully logged in!');
		}
		else {
			http_response_code(404);die();
		}
	}else{
		http_response_code(404);
		die();
	}
}

$id = "";
$action = "";
$type = "";
$fields = array();


if ($_SERVER['REQUEST_METHOD'] == 'GET'){
	if (isset($_GET['id'])) $id = $_GET['id'];
	if (isset($_GET['action'])) $action = $_GET['action'];
	if (isset($_GET['type'])) $type = $_GET['type'];	
}else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$fields = $_POST;
	if (isset($fields['id'])) {
		$id = $fields['id'];
		unset($fields['id']);
	}
	if (isset($fields['action'])) {
		$action = $fields['action'];
		unset($fields['action']);
	}
	if (isset($fields['type'])) {
		$type = $fields['type'];
		unset($fields['type']);
	}
	if ($action == "login") login($fields);
}

if (!isset($_SESSION['user']) || !isset($_SESSION['api'])) exit();
$api = $_SESSION['api'];

function edit_Action($api, $type, $id, $fields){	
	$data = array(
	        "id" => $id,
	        "data" => $fields
	);
	$res = $api->_Insert($type, array($data));	
	return $res;
}


switch ($action) {
	case 'delete':
		$res = $api->_DeleteById($type, $id);		
		header("Location: itemspage_controller.php?type=" . $type);die();
		break;
	case 'edit' :		
		echo json_encode(edit_Action($api, $type, $id, $fields));
		break;
	default:
		break;
}