<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/home_style.css">
    <title>Home | page</title>
</head>
<body>
    <!--Modal-->
    <div class="modal" tabindex="-1" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">¡Felicidades!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        <p>Has entrado correctamente</p>
                    </div>
            </div>
        </div>
    </div>
    <!--Modal-->

    <div class="back">
        <div class="head">
            <div class="logo"></div>
            <ul class="nav justify-content-end" id="navbar">
                <li class="nav-item">
                    <a class="nav-link active" href="#main">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hobbies">NOSOTROS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cont">CONTACTO</a>
                </li>
            </ul>
        </div> 
        
        <div class="space"></div>

        <div class="main" id="main">

            <div class="btme">
                <div class="user"></div>
                <div class="desc">
                    <h1>ETHAN EDUARDO RUIZ ESTRADA</h1>
                    <p>Desarrollador de software principiante con el objetivo de descubrir y dominar nuevas 
                        tecnologías para mejorar el desarrollo y funcionamiento para cada proyecto hecho y 
                        por hacer. Declinado por el desarrollo front-end de paginas intentando dominar las 
                        tecnologías de HTML y CSS.</p>
                </div>
            </div>

            <div id="hobbies">
                <div class="card" style="width: 18rem;" id="card1">
                    <img src="IMG/ingles.jpg" class="card-img-top" alt="..." id="img">
                    <div class="card-body">
                        <h5 class="card-title">Inglés</h5>
                        <p class="card-text">Practico ingles tres veces por semana, actualmente estoy en un grado 
                            avanzado y llevo alrededor de tres año estudiando. No es algo que se me complica, la
                            gramática la puedo entender muy bien y la pronunciación no es algo que me confunda.</p>
                    </div>
                </div>

                <div class="card" style="width: 18rem;" id="card2">
                    <img src="IMG/guitar.png" class="card-img-top" alt="..." id="img">
                    <div class="card-body">
                        <h5 class="card-title">Guitarra</h5>
                        <p class="card-text">Suelo practicar guitarra tres veces por semana, empecé en el campo de la 
                            música con la batería sin embargo sufrí más atracción por la guitarra. Con aproximadamente
                            6 meses de practica no sueno nada mal.</p>
                    </div>
                </div>

                <div class="card" style="width: 18rem;" id="card3">
                    <img src="IMG/puzzles.jpg" class="card-img-top" alt="..." id="img">
                    <div class="card-body">
                        <h5 class="card-title">Puzzles</h5>
                        <p class="card-text">Cualquier día que tenga un periodo libre disfruto de resolver unos 
                            cuantos pares de puzles en mi teléfono. Me gusta la demanda que tiene sobre la agilidad
                            mental y el razonamiento para lograr ordenar cada pieza del juego.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer" id="cont">

            <div class="contact">
                <form> 
                    <h1>¿QUIERES SABER MÁS? ME PONDRÉ EN CONTACTO CONTIGO...</h1>
                    <input type="text" placeholder="Escribe tu correo" id="texto">
                    <input class="btn btn-primary" type="button" value="Enviar" id="enviar">
                </form> 
            </div>

            <nav class="nav flex-column" id="navbarbt">
                <a class="nav-link active" href="#main"><strong>INICIO</strong></a>
                <a class="nav-link" href="#hobbies"><strong>NOSOTROS</strong></a>
                <a class="nav-link" href="#cont"><strong>CONTACTO</strong></a>
            </nav>

            <div class="rdsl">
                <div class="fc"></div>
                <div class="ins"></div>
                <div class="tt"></div>
            </div>

        </div>
    </div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script>
        $(document).ready(function(){
            $('#myModal').modal('show')
        });
    </script>

</body>
</html>