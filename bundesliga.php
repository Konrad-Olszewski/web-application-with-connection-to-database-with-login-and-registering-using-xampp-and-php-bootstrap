<?php
session_start();
if (!isset($_SESSION['uzytkownik'])){
  @$LOGGED=FALSE;
}else
{
  @$LOGGED=TRUE;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
  crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
  crossorigin="anonymous"></script>
  <style>
    html, body {
      height: 100%;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
    }

    footer {
      margin-top: auto;
    }
  </style>
  <title>Sportowe zawirowania</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
<div class="container-fluid">
    <a class="navbar-brand" href="strona_glowna.php">Sportowe zawirowania</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarText"
    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"
    type="button">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="strona_glowna.php">Strona główna</a>
        </li>
        <?php
if($LOGGED) {
   echo '<li class="nav-item">
   <a class="nav-link" href="logout.php"">Wyloguj się</a>
 </li>';
} else {
  echo '<li class="nav-item">
  <a class="nav-link" href="zaloguj_sie.php">Zaloguj się</a>
</li>
<li class="nav-item">
<a class="nav-link" href="rejestracja.php">Zarejestruj się</a>
</li>';
}
?>
        <li class="nav-item">
        <a class="nav-link" href="kontakt_pomoc.php">Kontakt - pomoc</a>
        </li>
    </ul>
    </div>
</div>
</nav>


<table class="table table-hover">
    <tr>
    <thead>
    <td>Miejsce</td>
    <th scope="col">Drużyna</th>
    <th scope="col">Mecze Rozegrane</th>
    <th scope="col">Punkty</th>
    </thead>
    </tr>
    <tr>
    <td>1.</td>
    <td>Bayern Leverkusen</td>
    <td>15</td>
    <td>39</td>
    </tr>
    <tr>
    <td>2.</td>
    <td>Bayern Monachium</td>
    <td>14</td>
    <td>35</td>
    </tr>
    <tr>
    <td>3.</td>
    <td>RB Lipsk</td>
    <td>16</td>
    <td>33</td>
    </tr>
    <tr>
    <td>4.</td>
    <td>VfB Stuttgart</td>
    <td>15</td>
    <td>31</td>
    </tr>
    <tr>
    <td>5.</td>
    <td>Borussia Dortmund</td>
    <td>15</td>
    <td>26</td>
    </tr>
    <tr>
    <td>6.</td>
    <td>SC Freiburg</td>
    <td>15</td>
    <td>24</td>
    </tr>
    <tr>
    <td>7.</td>
    <td>TSG Hoffenheim</td>
    <td>15</td>
    <td>23</td>
    </tr>
    <tr>
    <td>8.</td>
    <td>Eintracht Frankfurt</td>
    <td>15</td>
    <td>21</td>
    </tr>
    <tr>
    <td>9.</td>
    <td>VfL Wolfsburg</td>
    <td>15</td>
    <td>19</td>
    </tr>
    <tr>
    <td>10.</td>
    <td>FC Augsburg</td>
    <td>15</td>
    <td>18</td>
    </tr>
    <td>11.</td>
    <td>B. Moenchengladbach</td>
    <td>15</td>
    <td>17</td>
    </tr>
    <td>12.</td>
    <td>Heidenheim</td>
    <td>15</td>
    <td>17</td>
    </tr>
    <td>13.</td>
    <td>Werder Brema</td>
    <td>16</td>
    <td>16</td>
    </tr>
    <td>14.</td>
    <td>Bochum</td>
    <td>15</td>
    <td>16</td>
    </tr>
    <td>15.</td>
    <td>1. FC Union Berlin</td>
    <td>14</td>
    <td>10</td>
    </tr>
    <td>16.</td>
    <td>1. FC Koeln</td>
    <td>15</td>
    <td>10</td>
    </tr>
    <td>17.</td>
    <td>1. FSV Mainz 05</td>
    <td>15</td>
    <td>9</td>
    </tr>
    <td>18.</td>
    <td>Darmstadt</td>
    <td>15</td>
    <td>9</td>
    </tr>
    </table>

<footer class="bg-dark text-white text-center p-3">
    &copy; 2023 Sportowe zawirowania. Wszelkie prawa zastrzeżone.
  </footer>
</body>
</html>