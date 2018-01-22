<?php 
session_start();
$resArray['estado'] = "Error"; 
$data = json_decode(file_get_contents("php://input"));

if($data->usuario == "" || $data->pass==""){
    $_SESSION['estado'] = "Error: datos vacios";
    $resArray = $_SESSION; 
}else {
    if($data->usuario=="coby" && $data->pass="root"){
        $_SESSION['estado'] = "OK";    
    } else {
        $_SESSION['estado'] = "ERROR: USUARIO INVALIDO";    
    }
    $resArray = $_SESSION; 
        
}

echo json_encode($resArray);

?>