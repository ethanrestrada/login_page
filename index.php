<?php
if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="IMG/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/login_style.css">
    <title>Login | Page</title>
</head>
<body>
    
    <main>
        <div class="main-back">
            <div class="container-form container-form--filter">
                <img src="IMG/enter.png" alt="Not found" class="container-form__logimg">
                
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" class="container-form__form">
                    <label for="text" class="container-form__label">Correo electronico</label>
                    <input type="text" name="email" class="container-form__email" placeholder="Correo electronico" autocomplete="off" value="<?php if(isset($email)) echo $email?>">

                    <label for="password" class="container-form__label">Contraseña</label>
                    <input type="password" name="password" class="container-form__password password" placeholder="Contraseña" autocomplete="off">

                    <input type="checkbox" name="checkbox" class="container-form__checkbox">
                    <label for="checkbox" class="container-form__label checkbox">Mantener sesion activada</label><br><br>
                    
                    <?php include("comprobacion.php");?><br>
                    <input type="submit" name="submit" value="Enviar" class="btn btn-outline-dark">
                    
                </form>
            
            </div>
        </div>
    </main>

</body>
</html>