<?php
 class LeapYear
	{
		function findLeapYear($input)
		{
			$date_array = explode("/", $input);

			$year = $date_array[2];
			$day = $date_array[1];
			$month = $date_array[0] - 1;

			$reference_year = 2000;

			$num_of_years = abs($year - $reference_year);

			$days = 0;

			while ($num_of_years >= 4) {
				$days += 1461;
				$num_of_years -= 4;
			} while ($num_of_years >= 1) {
				$days += 365;
				$num_of_years -= 1;
			}

			while ($month >= 11) {
				$days += 30;
				$month -= 1;
			} while ($month >= 10) {
				$days += 31;
				$month -= 1;
			} while ($month >= 9) {
				$days += 30;
				$month -= 1;
			} while ($month >= 8) {
				$days += 31;
				$month -= 1;
			} while ($month >= 7) {
				$days += 31;
				$month -= 1;
			} while ($month >= 6) {
				$days += 30;
				$month -= 1;
			} while ($month >= 5) {
				$days += 31;
				$month -= 1;
			} while ($month >= 4) {
				$days += 30;
				$month -= 1;
			} while ($month >= 3) {
				$days += 31;
				$month -= 1;
			}
			if ($year % 4 == 0){
				while ($month >= 2) {
					$days += 29;
					$month -= 1;
				}
				} else {
					while ($month >= 2) {
						$days += 28;
						$month -= 1;
					}
				}
			while ($month >= 1) {
				$days += 31;
				$month -= 1;
			}

		return $days;

		}
	}

 ?>
