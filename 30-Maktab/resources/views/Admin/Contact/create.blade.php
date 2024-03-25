<?php
$servername = "localhost";
$username = "root";
$password = "2008Ozodbek!@#$";
$database = "site";

// Create connection

$connection = new mysqli($servername, $username, $password, $database);

$name = "";
$email = "";
$subject = "";
$message = "";


$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];



    do {
        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            $errorMessage = "Hammasini to`ldirishingiz shart!";
            break;
        }


        // Database ga yangi contact qo`shish
        $sql = "INSERT INTO contact (`name`, email, `subject`, `message`) 
                VALUES ($name, '$email', '$subject', '$message')";
        $result = $connection->query($sql);
        if (!$result) {
            $errorMessage = "Errorr" . $connection->error;
            break;
        }
        $name = "";
        $email = "";
        $subject = "";
        $message = "";

        $successMessage = "Mijoz qo`shildi";

        header("location: ./index.php");
        exit;
    } while (false);
}
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Yangi foydalanuvchi</h2>
        ';

if (!empty($errorMessage)) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>$errorMessage</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
    </div>";
}
echo '

        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="' . $name . '">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value=" ' . $email . '">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">subject</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="subject" value="' . $subject . ' ">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">message</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="message" value="' . $message . ' ">
                </div>
            </div>';



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
                    <button type="submit" class="btn btn-primary">Joylash</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a clas="btn btn-outline-primary" href="/index.php" role="button">
                        Bekor qilish</a>
                </div>
            </div>
        </form>
</body>
</html>';