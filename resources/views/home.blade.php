<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https : //fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Great+Vibes&family=Permanent+Marker&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Permanent+Marker&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!--
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href='bootstrap/css/bootstrap-grid.css'>
    <link rel="stylesheet" href='bootstrap/css/bootstrap-grid.min.css'>
    <link rel="stylesheet" href='bootstrap/css/bootstrap-grid.rtl.css'>
    <link rel="stylesheet" href='bootstrap/css/bootstrap-grid.rtl.min.css'>    <link rel="stylesheet" href='bootstrap/css/bootstrap-reboot.css'>
    <link rel="stylesheet" href='bootstrap/css/bootstrap-reboot.min.css'>
    <link rel="stylesheet" href='bootstrap/css/bootstrap-reboot.rtl.css'>
    <link rel="stylesheet" href='bootstrap/css/bootstrap-reboot.rtl.min.css'>
    <link rel="stylesheet" href='bootstrap/css/bootstrap-reboot.rtl.css'>
    <link rel="stylesheet" href='bootstrap/css/bootstrap-reboot.rtl.min.css'>

    <link rel="stylesheet" href='bootstrap/css/bootstrap-utilities.css'>
    <link rel="stylesheet" href='bootstrap/css/bootstrap-utilities.min.css'>
    <link rel="stylesheet" href='bootstrap/css/bootstrap-utilities.rtl.css'>
    <link rel="stylesheet" href='bootstrap/css/bootstrap-utilities.rtl.min.css'>


    <link rel="stylesheet" href='bootstrap/css/bootstrap.css'>
    <link rel="stylesheet" href='bootstrap/css/bootstrap.min.css'>
    <link rel="stylesheet" href='bootstrap/css/bootstrap.rtl.css'>
    <link rel="stylesheet" href='bootstrap/css/bootstrap.rtl.min.css'>
    -->
    <title>Document</title>

    <style>
        .banniere {
            background-image: url(images/banniere4.webp);
        }
    </style>

</head>

<body>

    <header>

        <div class="iconmenu" onclick="toggleNav();">
            <i class="bx bx-menu"></i>
        </div>

        <a href="#" class="logo">
            RH
        </a>

        <div class="search">
            <i class="bx bx-search"></i>
            <input type="text" placeholder="Rechercher votre salle">
        </div>

        <a href="">
            <i class="bx bx-brightness"></i>
        </a>

        <ul class="navbar">

            <li>
                <a href="#banniere" onclick="toggleNav();">
                    Acceuil
                </a>
            </li>

            <li>
                <a href="#salles" onclick="toggleNav();">
                    Decouvrir les salles
                </a>
            </li>

            <li>
                <a href="#commentaires" onclick="toggleNav();">
                    Commentaires
                </a>
            </li>

            <a type="button" class="btn-reserve" id="myBtn" onclick="toggleNav();">
                Connexion
            </a>

            <div id="myModal" class="modal">

                <div class="modal-content" id="connexion">

                    <span class="close">&times;</span>

                    <section class="contacts">

                        <div class="contenu">

                            <div class="titre noir">

                                <h2 class="titre-texte">
                                    <span>C</span>onnectez-vous
                                </h2>

                            </div>

                            <form action="" class="contactform" id="contacts">

                                <div class="inputboite">
                                    <input type="text" placeholder="Nom">
                                </div>

                                <div class="inputboite">
                                    <input type="text" placeholder="Email" width="100px">
                                </div>

                                <p>
                                    Vous n'avez pas de compte? <a href="#inscription">Inscrivez-vous</a>
                                </p>

                                <div class="inputboite">
                                    <input type="submit" value="Connexion">
                                </div>

                            </form>

                        </div>

                    </section>

                    <section class="contacts" id="inscription">

                        <div class="contenu">

                            <div class="titre noir">

                                <h2 class="titre-texte">
                                    <span>I</span>nscrivez-vous
                                </h2>

                            </div>

                            <form action="" class="contactform" id="contacts" method="post">

                                {{ csrf_field() }}

                                <div class="inputboite">
                                    <input type="text" placeholder="Nom">
                                </div>

                                <div class="inputboite">
                                    <input type="text" placeholder="Prenoms">
                                </div>

                                <div class="inputboite">
                                    <input type="text" placeholder="Email" width="100px">
                                </div>

                                <div class="inputboite">
                                    <input type="text" placeholder="Mot de Passe">
                                </div>

                                <p>
                                    Vous avez deja un compte? <a href="#connexion">Connectez-vous</a>
                                </p>

                                <div class="inputboite">
                                    <input type="submit" value="Inscription">
                                </div>



                            </form>

                        </div>

                    </section>

                </div>
            </div>

        </ul>

    </header>

    <section class="banniere" id="banniere">
        <div class="contenu">
            <h2>
                ReservationHome
            </h2>
            <p>

            </p>
            <!-- <a href="#" class="btn1">
                Home
            </a>
            <a href="{{ asset('views/form.blade.php') }}" class="btn2">
                Reservation
            </a> -->
        </div>
    </section>

    <section class="salles" id="salles">
        <div class="contenu">
            <a href="/form">
                <h1></h1>
            </a>
            <div class="titre">
                <h2 class="titre-texte">
                    Salles <span>disponibles</span>
                </h2>
                <p>
                    Commencez par reserver chez <a href="#" class="logo"> <span>R</span>eservation<span>H</span>ome </a>
                </p>
            </div>
        </div>
        <div class="contenu">
            <div class="box">
                <div class="imbox">
                    <img src="public/images/salle2.jpeg" alt="sallebigmate" id="i1">
                </div>
                <div class="text">
                    <h3>
                        Salles BigMate
                    </h3>
                    <p>
                    <ul class="caracteristiques">
                        <li>
                            16 Places
                        </li>
                        <li>
                            SALLE CLIMATISEE ET AEREE
                        </li>
                        <li>
                            SUR ETAGE 2
                        </li>
                    </ul>
                    </p>
                </div>
            </div>

            <div class="box">
                <div class="imbox">
                    <img src="public/images/salle1.jpeg" alt="Salle Pavllion" id="i2">
                </div>
                <div class="text">
                    <h3>Salle Pavillon

                    </h3>
                    <p>
                    <ul class="caracteristiques">
                        <li>
                            21 Places
                        </li>
                        <li>
                            SALLE CLIMATISEE ET AEREE
                        </li>
                        <li>
                            SUR ETAGE 2
                        </li>
                    </ul>
                    </p>
                </div>
            </div>

            <div class="box">
                <div class="imbox">
                    <img src="public/images/salle4.jpeg" alt="Salle AuMonsieur">
                </div>
                <div class="text">
                    <h3>
                        Salle AuMonsieur
                    </h3>
                    <p>
                    <ul class="caracteristiques">
                        <li>
                            8 Places
                        </li>
                        <li>
                            SALLE CLIMATISEE AVEC Projecteurs
                        </li>
                        <li>
                            SUR ETAGE 2
                        </li>
                    </ul>
                    </p>
                </div>
            </div>

            <div class="box">
                <div class="imbox">
                    <img src="public/images/salles5.jpeg" alt="Salle DangBit">
                </div>
                <div class="text">

                    <p>
                    <ul class="caracteristiques">
                        <h3>
                            Salle DangBit
                        </h3>
                        <li>
                            12 Places
                        </li>
                        <li>
                            Table centrale
                        </li>
                        <li>
                            Projecteurs
                        </li>
                    </ul>
                    </p>
                </div>
            </div>

            <div class="box">
                <div class="imbox">
                    <img src="public/images/salle8.jpeg" alt="Salle VueDieu">
                </div>
                <div class="text">
                    <h3>
                        Salle VueDieu
                    </h3>
                    <p>
                    <ul class="caracteristiques">
                        <li>
                            12 Places
                        </li>
                        <li>
                            Table centrale
                        </li>
                        <li>
                            Projecteurs
                        </li>
                    </ul>
                    </p>
                </div>
            </div>

            <div class="box">
                <div class="imbox">
                    <img src="public/images/salle10.jpeg" alt="Salle deJeanPierre">
                </div>
                <div class="text">
                    <h3>
                        Salle deJeanPierre
                    </h3>
                    <p>
                    <ul class="caracteristiques">
                        <li>
                            20 Places
                        </li>
                        <li>
                            Table centrale
                        </li>
                        <li>
                            Projecteurs
                        </li>
                    </ul>
                    </p>
                </div>
            </div>

            <div class="box">
                <div class="imbox">
                    <img src="public/images/salles4.jpeg" alt="lemollet">
                </div>
                <div class="text">
                    <h3>
                        Salle LeMollet
                    </h3>
                    <p>
                    <ul class="caracteristiques">
                        <li>
                            12 Places
                        </li>
                        <li>
                            Table centrale
                        </li>
                        <li>
                            Projecteurs
                        </li>
                    </ul>
                    </p>
                </div>
            </div>

            <div class="box">
                <div class="imbox">
                    <img src="public/images/salles8.jpg" alt="Salle Demerite">
                </div>
                <div class="text">
                    <h3>
                        Salle Demerite
                    </h3>
                    <p>
                    <ul class="caracteristiques">
                        <li>
                            10 Places
                        </li>
                        <li>
                            SALLE VENTILLEE AVEC ECRAN
                        </li>
                        <li>
                            Projecteurs
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
        <div class="titre">
            <a href="#" class="btn1">
                Voir Plus
            </a>
        </div>
    </section>




    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>


</body>

</html>
