<!DOCTYPE html>
    <?php 
    include 'employees_per_dept.php';
    ?>
<style>
    body{
        font-family: Calibri, Candara, Segoe, Segoe UI, Optimize, Arial, sans-serif;
        background-image: url('background.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }
    td.label{
        width: 90px;
        text-align: right;
        padding-right: 10px;
    }
    .expand{
        width: 170px;
    }
</style>
<body>
    <h1>Employee Management</h1>
    <br>
    <h3>New Employee:</h3>
    <form action="addEmployee.php" method="get">
        <table style="width:100%">
            <tr>
                <td class="tlabel">Name</td>
                <td><input type="name" name="name"></td>
            </tr>
            <tr>
                <td class="tlabel">Age</td>
                <td><input type="number" name="age"></td>                
            </tr>
            <tr>
                <td class="tlabel">Salary</td>
                <td><input type="number" step=".01" name="Salary"></td>                
            </tr>
            <tr>
                <td class="tlabel">Percent Time</td>
                <td><input type="text" name="percent_time"></td>                
            </tr>
            <tr>
                <td class="tlabel">Date Hired</td>
                <td><input class="expand" type="date" name="date-hired"></td>                
            </tr>
            <tr>
                <td class="tlabel">Department</td>
                <td>
                    <select class="expand" name="department">
                        <option value="" disabled="">--Select Department--</option>
                        <?php
                            include 'allDepartment.php';
                        ?>
                    </select>
                </td>               
            </tr>
            <tr>
                <td class="tlabel">Designation</td>
                <td>
                    <input type="radio" name="designation" value="1">Manager<br>
                    <input type="radio" name="designation" value="2">Employee<br>
                </td>
            </tr>   
            <tr>
                <td class="tlabel"></td>
                <td><input type="Submit"></td>                
            </tr>
        </table>
    </form>
    
    <h2>All Employees</h2>
    <h2 style="color: white;">DPSM</h2>
    <table style ="width: 100%" class ="department">
    <br>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Salary</th>
            <th>Hire Date</th>
            <th>Designation</th>
            <th>Action</th>
        </tr>
        <?php 
            department_number(1);
        ?>
    </table>
    <h2 style="color: white;">Dummy Department</h2>
    <table style ="width: 100%" class ="department">
    <br>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Salary</th>
            <th>Hire Date</th>
            <th>Designation</th>
            <th>Action</th>
        </tr>
        <?php 
            department_number(2);
        ?>
    </table>
    <h2 style="color: white;">Ghost Department</h2>
    <table style ="width: 100%" class ="department">
    <br>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Salary</th>
            <th>Hire Date</th>
            <th>Designation</th>
            <th>Action</th>
        </tr>
        <?php 
            department_number(3);
        ?>
    </table>
</body>
</html>