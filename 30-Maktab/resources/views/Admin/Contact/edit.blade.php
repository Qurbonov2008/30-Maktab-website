<?php

$servername = "localhost";
$username = "root";
$password = "2008Ozodbek!@#$";
$database = "site";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);



$id= "";
$name = "";
$email = "";
$subject = "";
$message = "";



$errorMessage = "";
$succcessMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!$_GET["id"]) {
        header("Location: ./index.php");
        exit;
    }

    $id = $_GET["id"];

    // id da mos mijozlar jadvalidan mijozni topish 
    $sql = "SELECT * FROM contact WHERE id = $id";
    $result = $connection->query($sql);

    $row = $result->fetch_assoc();

    if (!isset($row)) {
        header("Location: ./index.php");
        exit;
    }

    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];
    $subject = $row["subject"];
    $message = $row["message"];
} else {

    //mijoz ma'lumotlarini yangilash
    $id = $connection->real_escape_string($_POST["id"]);
    $name = $connection->real_escape_string($_POST["name"]);
    $email = $connection->real_escape_string($_POST["email"]);
    $subject = $connection->real_escape_string($_POST["subject"]);
    $message = $connection->real_escape_string($_POST["message"]);


    do {
        if (  empty($id) ||empty($name) || empty($email) || empty($subject) || empty($message)) {
            $errorMessage = "Hamma ma'lumotlar to'ldirilishi kerak";
            // break;
        }

        $sql = "UPDATE contact SET id = '$id' ,   `name` = '$name' , email = '$email', `subject` = '$subject', `message` = '$message' WHERE id = $id";

        $result = $connection->query($sql);


        if (!$result) {
            $errorMessage = "Request error: " . $connection->error;
            break;
        }

        $succcessMessage = "Mijoz ma'lumotlar yangilandi!!! Uraaa";

        header("location: ./index.php");
        exit;
    } while (true);
}

echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container my-5">
        <h2>Mijozni yangilash</h2>
        ';
    
        if (!empty($errorMessage)) {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>$errorMessage</strong>
    < type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
    </div>";
        }
        echo '
        <form method="post">
            <div class="col-sm-6">
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="id" value="' . $id .'">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value=" ' .$name  .'">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value=" '.$email .'">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Subject</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="subject" value="'.$subject .'">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Message</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="message" value="' . $message .'">
                </div>
            </div> 
            ';
            if (!empty($succcessMessage)) {
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                             <strong>$succcessMessage</strong>
                             <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                        </div>
                    </div>
                </div>
                ";
            }
            echo '

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Joylash</>
                </div>
                <div class="col-sm-3 d-grid">
                    <a clas="btn btn-outline-primary" href="/index.php" role="button">
                        Bekor qilish</a>
                </div>
            </div>
        </form>
</body>

</html>';