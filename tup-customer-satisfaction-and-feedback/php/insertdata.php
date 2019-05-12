<?php
require 'db.php';

	@$data = $_GET['arr'];

   if(isset($data)){
	    $converted = json_decode($data,true);

		$fname = $converted[0][0];
		$lname = $converted[0][1];
		$email = $converted[0][2];
		$contactNum = $converted[0][3];
		$company = $converted[0][4];

		$office = $converted[1][0];
		$employee = $converted[1][1];
		$date = $converted[1][2];

		$criteria1 = $converted[2][0];
		$criteria2 = $converted[2][1];
		$criteria3 = $converted[2][2];
		$criteria4 = $converted[2][3];
		$criteria5 = $converted[2][4];

		$feedback = $converted[3];
		$comment = $converted[4];

		if(isset($fname) && isset($lname) && isset($email) && isset($contactNum) && isset($company) && isset($office) && isset($employee) && isset($date) && isset($criteria1) && isset($criteria2) && isset($criteria3) && isset($criteria4) && isset($criteria5) && isset($feedback) && isset($comment)){

			$sql = "INSERT INTO evaluations (first_name,last_name,email,contactno,company,office,employee_name,criteria_1,criteria_2,criteria_3,criteria_4,criteria_5,feedback,comment,eval_date) VALUES ('$fname','$lname','$email','$contactNum','$company','$office','$employee','$criteria1','$criteria2','$criteria3','$criteria4','$criteria5','$feedback','$comment','$date')";

			if($hexdb->query($sql)){
           	  echo "success";
           }
           else{
           	  echo "failed";
           }
		}
		else{
			echo "incomplete data";
		}

}
else{
	echo "500 bad request!";
}	
	
 ?>