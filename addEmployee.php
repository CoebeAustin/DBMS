<?php

include 'DBConnector.php';

$name = $_GET["name"];
$age = $_GET["age"];
$salary = $_GET["salary"];
$HireDate = $_GET["date-hired"];
$DeptID = $_GET["department"];
$Percent_Time = $_GET["percent_time"];

$sql = "INSERT INTO employee (EmpID, EmpName, Age, Salary, HireDate)
        VALUES (NULL, '$name', '$age', '$salary', '$HireDate');";
$result = $conn -> query($sql);

if ($conn -> query($sql) == TRUE){
    $last_id = $conn -> insert_id; // retrieving the ID of the newly inserted row

     // add a row in the work table to register the new employee into a department    
     $query = "INSERT INTO work (EmpID, DeptID, Percent_Time)
          VALUES ('$last_id', '$DeptID', '$Percent_Time');";
     $result = $conn -> query($query);

     // this will reload the employees.php file
     header("Location:employees.php");
}

else{
    echo "Error: " .$sql . "</br>" . $conn -> error;    
}
$conn -> close();
?>