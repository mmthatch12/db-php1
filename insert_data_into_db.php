<!DOCTYPE>

<html>
    <head>
        <title>Insert Data into Database</title>
        <link rel="stylesheet" href="include/style.css">
    <head>
    <body>
        <div class="formdiv">
            <form action="insert_data_into_db.php" method="post">
                <fieldset>
                    <span class="fieldinfo">Employee Name:</span>
                    <br>
                    <input type="text" name="EName" value="">
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