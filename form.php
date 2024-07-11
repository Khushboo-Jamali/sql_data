<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        width: 80%;
        border-collapse: collapse;
        background-color: skyblue;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 15px;
        margin-top: 100px;

    }

    table,
    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
</style>

<body>

    <table align="center">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Gender</th>



            </tr>
        </thead>
        <tbody>
            <?php if (isset($_POST['btn'])) {
                echo "<tr>";
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $location = $_POST['location'];
                $gender = $_POST['gender'];







                echo  "<td>" . $name . "</td><br>";
                echo " <td>  " . $email . "</td><br>";
                echo "<td>" . $password . "</td><br>";
                echo "<td>" . $location . "</td><br>";
                echo "<td>" . $gender . "</td><br>";
            }
            echo "</tr>";
            ?>


        </tbody>
    </table>

</body>

</html>