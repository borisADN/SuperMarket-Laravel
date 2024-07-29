Espéranza
esther09160
En ligne



Bienvenue, 
BORIS
. Tu as amené de la pizza, j'espère !
 — Aujourd’hui à 08:13
BORIS — Aujourd’hui à 08:14


body {
    font-family: "Open Sans", sans-serif;

    margin: 0 auto 0 auto;
Afficher plus
message.txt
2 Ko
home.css
home.blade.php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
Afficher plus
message.txt
1 Ko
Tout le monde, accueillez comme il se doit 
mensah kodjo
 !
 — Aujourd’hui à 08:17
BORIS — Aujourd’hui à 08:18
route::get('/', [AuthController::class, 'index'])->name('login');
route::post('/', [AuthController::class, 'login_action'])->name('login_action');
Contents de te voir, 
ADOGLI Amivi Edwige
.
 — Aujourd’hui à 08:19
elom khatib
 a bondi dans le serveur.
 — Aujourd’hui à 08:20
BORIS — Aujourd’hui à 08:26
Route::get('/home', [MainController::class, 'home'])->name('home');
route::get('/', [AuthController::class, 'index'])->name('login');
route::post('/', [AuthController::class, 'login_action'])->name('login_action');
BORIS — Aujourd’hui à 08:50
https://github.com/borisADN/SuperMarket-Laravel.git
GitHub
GitHub - borisADN/SuperMarket-Laravel
Contribute to borisADN/SuperMarket-Laravel development by creating an account on GitHub.
﻿
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700,600" rel="stylesheet" type="text/css" />
    <title>Application</title>
</head>

<body>
    <form method="post" action="#">

        @csrf
        @method('POST')

        <div class="box">
            <h1>espace de Connexion</h1>

            <input type="email" name="email" class="email" placeholder="email" />

            <input type="password" name="password" class="email" placeholder="Mot de passe" />

            <div class="btn-container">
                <button type="submit"> Connexion</button>
            </div>

        
            <!-- End Btn2 -->
        </div>
        <!-- End Box -->
    </form>


</body>

</html>