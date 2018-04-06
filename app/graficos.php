<?php
	$salida="";
	if (isset($_POST['tienda'])) {
    switch ($_POST['tienda']) {
        case '0':
        	//buscar y calcular con todos
        	$sql = "SELECT * FROM datos";
        	$var = calcular($sql);
			echo json_encode($var);			
        	break;
        default:
        	//buscar y calcular con todos
        	$tienda = $_POST['tienda'];
        	$sql = "SELECT * FROM datos WHERE id_tienda=".$tienda.";";
			$var = calcular($sql);
			echo json_encode($var);
			break;
    }
}
function calcularBase($arr){
	$base = 0;
	for ($i=0; $i < sizeof($arr); $i++) { 
		if($arr[$i]>=1 && $arr[$i]<=7){
			$base++;
		}
	}
	return $base;
}

function calcularSatisfaccion($arr, $num){
	$notas = 0;
	for ($i=0; $i < sizeof($arr); $i++) { 
		if($arr[$i]>=6 && $arr[$i]<=7){
			$notas++;
		}
	}
	$satisfaccion = round(($notas/$num)*100, 3);
	return $satisfaccion;
}

function calcularInsatisfaccion($arr, $num){
	$notas = 0;
	for ($i=0; $i < sizeof($arr); $i++) { 
		if($arr[$i]>=1 && $arr[$i]<=4){
			$notas++;
		}
	}
	$insatisfaccion = round(($notas/$num)*100, 3);
	return $insatisfaccion;
}

function calcular($sqlquery){
	include('session.php');
	$result = mysqli_query($db,$sqlquery);
	$datosP1 = array();
	$datosP2 = array();
	$datosP3 = array();
	$datosP4 = array();
	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		$datosP1[] = $row['P1'];
		$datosP2[] = $row['P2'];
		$datosP3[] = $row['P3'];
		$datosP4[] = $row['P4'];
	}
	
	//calcular Base (notas de 1 a 7) por pregunta
	$baseP1 = calcularBase($datosP1);
	$baseP2 = calcularBase($datosP2);
	$baseP3 = calcularBase($datosP3);
	$baseP4 = calcularBase($datosP4);
	
	//ver satisfaccion (notas 6 y 7) en % sobre base
	$satisP1 = calcularSatisfaccion($datosP1, $baseP1);
	$satisP2 = calcularSatisfaccion($datosP2, $baseP2);
	$satisP3 = calcularSatisfaccion($datosP3, $baseP3);
	$satisP4 = calcularSatisfaccion($datosP4, $baseP4);			
	
	//ver insatisfaccion (notas 1,2,3,4) en % sobre base
	$insatisP1 = -calcularInsatisfaccion($datosP1, $baseP1);
	$insatisP2 = -calcularInsatisfaccion($datosP2, $baseP2);
	$insatisP3 = -calcularInsatisfaccion($datosP3, $baseP3);
	$insatisP4 = -calcularInsatisfaccion($datosP4, $baseP4);

	//ver neta %satisf - % insatisf
	$netaP1 = round($satisP1 - abs($insatisP1),3);
	$netaP2 = round($satisP2 - abs($insatisP2),3);
	$netaP3 = round($satisP3 - abs($insatisP3),3);
	$netaP4 = round($satisP4 - abs($insatisP4),3);

	//armar salida
	$salida = array(["Amabilidad", $baseP1, $satisP1, $insatisP1, $netaP1], ["Calidad", $baseP2, $satisP2, $insatisP2, $netaP2], ["Eficiencia", $baseP3, $satisP3, $insatisP3, $netaP3], ["Seguridad", $baseP4, $satisP4, $insatisP4, $netaP4]);
	
	return $salida;
}
?>