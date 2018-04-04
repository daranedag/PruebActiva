<?php
	if (isset($_POST['tienda'])) {
    switch ($_POST['tienda']) {
        case '0':
        	//buscar y calcular con todos
        	/*$sql = "SELECT * FROM tiendas";
			$result = mysqli_query($db,$sql);
			$option='<option value="0"> Todos </option>';
			while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
				$option .= '<option value = "'.$row['id_tienda'].'">'.$row['nom_tienda'].'</option>';
			}*/
			insert();
        	break;
        default:
        //buscar y calcular con la tienda especificada
            select();
            break;
    }
    else{
    	echo "nada";
    }
}

function select() {
    echo "The select function is called.";
    exit;
}

function insert() {
    echo "The insert function is called.";
    exit;
}
?>