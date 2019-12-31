<?php
require_once("include/db.php");
$SearchQueryParameter = $_GET["id"];
if(isset($_POST["Submit"])){
    if(!empty($_POST["EName"])&&!empty($_POST["SSN"])){
        $EName = $_POST["EName"];
        $SSN = $_POST["SSN"];
        $Dept = $_POST["Dept"];
        $Salary = $_POST["Salary"];
        $HomeAddress = $_POST["HomeAddress"];
        global $ConnectingDB;
        $sql = "INSERT INTO emp_record(ename,ssn,dept,salary,homeaddress)
        VALUES(:enamE,:ssN,:depT,:salarY,:homeaddresS)";
        $stmt = $ConnectingDB->prepare($sql);
        $stmt->bindValue('enamE', $EName);
        $stmt->bindValue('ssN', $SSN);
        $stmt->bindValue('depT', $Dept);
        $stmt->bindValue('salarY', $Salary);
        $stmt->bindValue('homeaddresS', $HomeAddress);
        $Execute = $stmt->execute();
        if($Execute){
            echo '<span class="success">Record has been added successfully</span>';
        }
    } else {
        echo '<span class="nameSsnErr">Name and SSN are required</span>';
    }
}


?>


<!DOCTYPE>

<html>
    <head>
        <title>Update Data into Database</title>
        <link rel="stylesheet" href="include/style.css">
    <head>
    <body>
        <?php 
        global $ConnectingDB;
        $sql="SELECT * FROM emp_record WHERE id='$SearchQueryParameter'";
        $stmt=$ConnectingDB->query($sql);
        while ($DataRows = $stmt->fetch()){
            $Id = $DataRows["id"];
            $EName = $DataRows["ename"];
            $SSN = $DataRows["ssn"];
            $Department = $DataRows["dept"];
            $Salary = $DataRows["salary"];
            $HomeAddress = $DataRows["homeaddress"];
        }
        ?>
        <div class="formdiv">

            <form action="insert_data_into_db.php" method="post">
                <fieldset>
                    <span class="fieldinfo">Employee Name:</span>
                    <br>
                    <input type="text" name="EName" value="<?php echo $EName; ?>">
                    <br>
                    <span class="fieldinfo">Social Security Number:</span>
                    <br>
                    <input type="text" name="SSN" value="">
                    <br>
                    <span class="fieldinfo">Department:</span>
                    <br>
                    <input type="text" name="Dept" value="">
                    <br>
                    <span class="fieldinfo">Salary:</span>
                    <br>
                    <input type="text" name="Salary" value="">
                    <br>
                    <span class="fieldinfo">Home Address:</span>
                    <br>
                    <textarea name="HomeAddress" rows="8" cols="80"></textarea>
                    <br>
                    <input type="submit" name="Submit" value="Submit your record">
                </fieldset>

            </form>

        </div>

    </body>
</html>