<?php
    require_once "Config/Config.php";

    try
    {
        $pdo = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        if (isset($_GET["recordId"])) {
            $recordId = $_GET["recordId"];
            $firstName = $_GET["firstName"];
            $lastName = $_GET["lastName"];
    
            //Execute INSERT statement
            $insertStatement = $pdo->prepare("INSERT INTO students (recordId, firstName, lastName)
                                        VALUES (:recordId, :firstName, :lastName)");
    
            $insertStatement->bindParam(":recordId", $recordId);
            $insertStatement->bindParam(":firstName", $firstName);
            $insertStatement->bindParam(":lastName", $lastName);
    
            $insertStatement->execute();
        }

        //Execute SELECT statement
        $selectStatement = $pdo->prepare("SELECT recordId, firstName, lastName FROM students");

        $selectStatement->execute();

        $result = $selectStatement->fetchAll();
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="number" name="recordId" placeholder="Record Id">
        <br>
        <input type="text" name="firstName" placeholder="First Name">
        <br>
        <input type="text" name="lastName" placeholder="Last Name">
        <br>
        <button type="submit">Add</button>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>Record Id</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($result as $student) {
            ?>
                <tr>
                    <td><?php echo $student["recordId"]; ?></td>
                    <td><?php echo $student["firstName"]; ?></td>
                    <td><?php echo $student["lastName"]; ?></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>