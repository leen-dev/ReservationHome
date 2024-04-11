<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https : //fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Great+Vibes&family=Permanent+Marker&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Permanent+Marker&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <title>Navbar</title>

    <style>

        .banniere{
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

            <a href="{{ url ('views/form.blade.php') }}" onclick="toggleNav();" class="btn-reserve">
                Reservation
            </a>
        </ul>

    </header>

    <section class="banniere" id="banniere">
        <div class="contenu">
            <h2>
                ReservationHome
            </h2>
            <p>

            </p>
            <a href="#" class="btn1">
                Home
            </a>
            <a href="{{ asset('views/form.blade.php') }}" class="btn2">
               Reservation
            </a>
        </div>
    </section>

                <!-- The Modal
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

</body>
</html>
