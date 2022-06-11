<?php
	include 'DBConnector.php';

	if(isset($_POST['EmpID'])) {		// checks if the employee ID is not null
		$employee_ID = $_POST['EmpID'];		/* global variable that collects data with method post and stored in
                                            a variable called employee_ID*/
        
		$delete_employee = "DELETE FROM employee WHERE EmpID = $employee_ID";  /*sql query that will remove an employee from the employee table*/
		$employee_deleted = $conn -> query($delete_employee);	// transmits the query into the database

		$delete_work = "DELETE FROM work WHERE EmpID = $employee_ID"; /*sql query that will remove an employee from the work table*/
		$work_deleted = $conn -> query($delete_work);	// sends and run the query to the database

	}else{      // prints if there is no data available in the table
		echo "No data available" or die("Cannot connect to the server");
	}
	
	header('location: employees.php');			// goes back to the employees.php and displays the whole database information
	$conn->close();
?>