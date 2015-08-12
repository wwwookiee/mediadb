<?php
	function date_transform($date){
		$new_date = split("-", $date);
		switch ($new_date[1]) {
			case '1':
				$new_date[1] = "January";
				break;
			case '2':
				$new_date[1] = "February";
				break;
			case '3':
				$new_date[1] = "March";
				break;
			case '4':
				$new_date[1] = "April";
				break;
			case '5':
				$new_date[1] = "Mai";
				break;
			case '6':
				$new_date[1] = "June";
				break;
			case '7':
				$new_date[1] = "July";
				break;
			case '8':
				$new_date[1] = "August";
				break;
			case '9':
				$new_date[1] = "September";
				break;
			case '10':
				$new_date[1] = "October";
				break;
			case '11':
				$new_date[1] = "November";
				break;
			case '12':
				$new_date[1] = "December";
				break;

		}
		return $new_date[2]." ".$new_date[1]." ".$new_date[0];
	}
?>