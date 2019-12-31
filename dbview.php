<?php
require_once("include/db.php");

?>


<!DOCTYPE>

<html>
    <head>
        <title>View data from database</title>
        <link rel="stylesheet" href="include/style.css">
    <head>
    <body>
        <h2 class="success"><?php echo @$_GET["id"]; ?></h2>
        <table width="1000" border="5" align="center">
            <caption>View From Database</caption>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>SSN</th>
                <th>Department</th>
                <th>Salary</th>
                <th>HomeAddress</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>



        <?php  
        global $ConnectingDB;
        $sql="SELECT * FROM emp_record";
        $stmt = $ConnectingDB->query($sql);
        while($DataRows = $stmt->fetch()){
            $Id = $DataRows["id"];
            $EName = $DataRows["ename"];
            $SSN = $DataRows["ssn"];
            $Department = $DataRows["dept"];
            $Salary = $DataRows["salary"];
            $HomeAddress = $DataRows["homeaddress"];
        
        ?>   
        <tr>
            <td><?php echo $Id; ?></td>
            <td><?php echo $EName; ?></td>
            <td><?php echo $SSN; ?></td>
            <td><?php echo $Department; ?></td>
            <td><?php echo $Salary; ?></td>
            <td><?php echo $HomeAddress; ?></td>
            <td><a href="update.php?id=<?php echo $Id; ?>">Update</a></td>
            <td><a href="delete.php?id=<?php echo $Id; ?>">Delete</a></td>
        </tr>
        <?php } ?>
        </table>


    </body>
</html>