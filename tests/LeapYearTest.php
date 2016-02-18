<?php

	require_once 'src/LeapYear.php';

	class LeapYearTest extends PHPUnit_Framework_TestCase
	{

		// function test_findYear()
		// {
		// //Arrange
		// $test_LeapYear = new LeapYear;
		// $input = '7/11/2014';
		//
		// //Act
		// $result = $test_LeapYear->findLeapYear($input);
		//
		// //Assert
		// $this->assertEquals('14', $result);
		// }
		//
		// function test_find_days_in_years()
		// {
		// //Arrange
		// $test_LeapYear = new LeapYear;
		// $input = '7/11/2014';
		//
		// //Act
		// $result = $test_LeapYear->findLeapYear($input);
		//
		// //Assert
		// $this->assertEquals('5113', $result);
		// }
		//
		// function test_find_days_in_month()
		// {
		// //Arrange
		// $test_LeapYear = new LeapYear;
		// $input = '7/11/2015';
		//
		// //Act
		// $result = $test_LeapYear->findLeapYear($input);
		//
		// //Assert
		// $this->assertEquals('5660', $result);
		// }

		function test_find_days_in_month()
		{
		//Arrange
		$test_LeapYear = new LeapYear;
		$input = '2016-2-18';

		//Act
		$result = $test_LeapYear->findLeapYear($input);

		//Assert
		$this->assertEquals('Thursday', $result);
		}

	}

?>
