<?php 
	require 'db.php';

	@$data = $_GET['arr'];

	// $converted = json_decode($data,true);
	// echo $data;
	// if ($data == '1') {
	// 	getOffice(1);
	// 	$new = getOffice();
	// 	echo $data;
	// }

	// if ($data == '2') {
	// 	getOffice(2);
	// 	$new = getOffice();
	// 	echo $data;
	// }

	// if ($data == '3') {
	// 	getOffice(3);
	// 	$new = getOffice();
	// 	echo $data;
	// }

	// if ($data == '4') {
	// 	getOffice(4);
	// 	$new = getOffice();
	// 	echo $data;
	// }

	// if ($data == '5') {
	// 	getOffice(5);
	// 	$new = getOffice();
	// 	echo $data;
	// }
	
	function getOffice(){
                $s_val_query = "SELECT criteria_1,criteria_2,criteria_3,criteria_4,criteria_5 FROM evaluations ORDER BY eval_id DESC LIMIT 1";
                $s_val_result = $GLOBALS['hexdb']->query($s_val_query);
                $s_val_data = array();
                if ($s_val_result->num_rows > 0) {
                        while($row = $s_val_result->fetch_assoc()) {
                        array_push($s_val_data, $row);
                        }
                } else {
                echo "0 results";
                }

                return $s_val_data;

        }
        $data2 = getOffice();

        $converted = json_decode(json_encode($data2),true);
        echo json_encode($converted);


 ?>