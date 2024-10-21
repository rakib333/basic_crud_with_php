<?php
include 'connection.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic CRUD operation</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="column">
                <table>
                    <thead>
                        <tr>
                            <th>Roll</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Grade</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_query = "Select * from `student`";
                        $sql_result = mysqli_query($connection, $sql_query);

                        if ($sql_result) {
                            while ($sql_row = mysqli_fetch_assoc($sql_result)) {
                                $roll = $sql_row['roll'];
                                $name = $sql_row['name'];
                                $email = $sql_row['email'];
                                $phone = $sql_row['phone'];
                                $grade = $sql_row['grade'];

                                echo '<tr>
                                        <td>' . $roll . '</td>
                                        <td>' . $name . '</td>
                                        <td>' . $email . '</td>
                                        <td>' . $phone . '</td>
                                        <td>' . $grade . '</td>
                                        <td><a href="update.php?update=' . $roll . '"  class="button button-outline">Update</a></td>
                                        <td><a href="delete.php?delete= ' . $roll . '"  class="button">Delete</a></td>
                                
                                </tr>';
                            }
                        }


                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="column column-offset-40">
                <a href="adduser.php" class="button">Add user</a>
            </div>
        </div>
    </div>

</body>

</html>