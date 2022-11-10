<?php 
    session_start();

    if(isset($_SESSION['user_id'])){
        header('Location: index.php');
    }
    require 'database.php';

    if(!empty($_POST['email']) && !empty($_POST['password'])){
       $records = $conn->prepare("SELECT id,email,password FROM users WHERE email = :email");
       $records->bindParam(':email', $_POST['email']);
       $records->execute();
       $results = $records->fetch(PDO::FETCH_ASSOC);

       $message = '';

       if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){
        $_SESSION['user_id'] = $results['id'];
        header('Location: index.php');
       }else{
        $message = 'No papu, esa no es la contraseña';
       }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- CREATE TABLE users (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, email VARCHAR (250) NOT NULL, password VARCHAR (250) NOT NULL) -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Acceder</title>
</head>
<body>
    <?php require 'partials/header.php' ?>
    <h1>Acceder</h1>
    <span>o <a href="signUp.php">Registrate</a></span>
    <?php if(!empty($message)) : ?>
        <p><?= $message ?></p>
        <?php endif; ?>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
        <input type="submit" value="Send">
    </form>
</body>
</html>