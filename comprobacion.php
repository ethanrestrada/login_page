<?php 
    if(isset($_POST['submit'])){
        if(empty($email)){
            echo "<p class='error'>-El campo de correo electronico es obligatorio.</p>";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<p class='error'>-El formato de correo electronico no es correcto.</p>";
        }if(empty($password)){
            echo "<p class='error'>-El campo de contraseña es obligatorio.</p>";
        } 
        
        if(!empty($email)){
            if(!empty($password)){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    header("location:home.php");
                }
            }
        }
    }

?>