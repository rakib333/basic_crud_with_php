<?php
include 'connection.php';

$roll = $_GET['update'];
$sql_query = "Select * from `student` where roll= $roll";
$sql_result = mysqli_query($connection, $sql_query);
$sql_row = mysqli_fetch_assoc($sql_result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $grade = $_POST['grade'];


    $sql_query = "update `student` set roll = $roll, name='$name', email='$email',phone='$phone', grade='$grade' where roll= $roll ";

    $sql_result = mysqli_query($connection, $sql_query);

    if ($sql_result) {
        // echo 'Data updated';
        header('location: index.php');
    } else {
        die(mysqli_error($connection));
    }
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Basic DB Intregration</title>
</head>

<body>
    <div class="container">
        <div class="column">
            <form method="POST">
                <label for="nameField">Name</label>
                <input type="text" placeholder="John doe" id="nameField" name="name" value="<?php echo $sql_row['name'] ?>">
                <label for="emailField">Email</label>
                <input type="email" placeholder="John@doe.com" id="emailField" name="email" value="<?php echo $sql_row['email'] ?>">
                <label for="phoneField">Phone</label>
                <input type="text" placeholder="Your phone number" id="phoneField" name="phone" value="<?php echo $sql_row['phone'] ?>">
                <label for="gradeField">Grade</label>
                <input type="text" placeholder="Obtained Grade" id="gradeField" name="grade" value="<?php echo $sql_row['grade'] ?>">

                <input class="button-primary" type="submit" value="update" name="update">
            </form>
        </div>
    </div>
</body>

</html>