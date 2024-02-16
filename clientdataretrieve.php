<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = new mysqli('localhost', 'root', '', 'form');
    
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $newApproval = $_POST['newApproval'];
        
       
        $sql = "UPDATE data SET Approval='$newApproval' WHERE id=$id";
        if ($con->query($sql) === TRUE) {
            if ($newApproval == "Approved") {
                echo "Creator Approved";
            } else {
                echo "Creator Not Approved!";
            }
        } else {
            echo "Error updating Approval: " . $con->error;
        }

    }

   
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        
        
        $sql = "DELETE FROM data WHERE id=$id";
        if ($con->query($sql) === TRUE) {
            echo "Row deleted successfully!";
        } else {
            echo "Error deleting row: " . $con->error;
        }
    }

    $con->close();
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body style="margin: 50px;">

    <h1>List of Creators </h1>
    <br>

    <table class="table">
        <thread>
            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Email </th>
                <th> Phone </th>
                <th> Username </th>
                <th> Password </th>
                <th> Approval </th>
                <th> Action </th>
            </tr>
        </thread>

        <tbody>
            <?php
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            $con = new mysqli('localhost', 'root', '', 'form');
        
            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }

            $sql = "SELECT * FROM data";
            $result = $con->query($sql);

            if (!$result) {
                die("invalid query". $con->error);
            }

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>" .$row['id'] ." </td>
                <td>" . $row['name'] ."</td>
                <td>" .$row['email']."</td>
                <td>" .$row['phone']."</td>
                <td>" .$row['username']."</td>
                <td>" .$row['password']."</td>
                <td>".$row['Approval']. "</td>
                <td>
                            <form method='post' action=''>
                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                            <input type='text' name='newApproval' placeholder='New Approval' required>
                            <button type='submit' name='update' class='btn btn-primary'>Update</button>
                        </form>
                        <form method='post' action=''>
                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                            <button type='submit' name='delete' class='btn btn-danger'>Delete</button>
                        </form>
                        </td>
                      </tr>";
            }
            $con->close();
            ?>
        </tbody>   
    </table>
    
</body>
</html>