<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/footer.css">
  <script src="../script.js"></script>

  <link rel="shortcut icon" href="../IMG/Logo top.png" type="image/x-icon">
  <title>Exido</title>
</head>

<body>

  <header>
    <nav>
      <img id="logo" src="../IMG/Logo.png" alt="">
      <h1 id="title">Escaperoom<span>Excido</span></h1>
      <a href="#" class="toggle-button" onclick="navbar()">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>
      <ul>
        <li><a href="../index.html">Home</a></li>
        <li><a href="#">activiteiten</a>
          <ul>
            <li><a href="kamer1.html">Kamer 1</a></li>
            <li><a href="kamer2.html">Kamer 2</a></li>
            <li><a href="kamer3.html">Kamer 3</a></li>
          </ul>
        </li>
        <li><a href="score.php">Scorebord</a></li>
        <li><a href="overons.html">Over ons</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>


  <div class="radius">
    <table>
        <thead>
          <tr>
            <th>Team naam</th>
            <th>Scoretijd</th>
            <th>Tevredenheids score</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>mmmmmmmmmm</td>
            <td>120 minuten</td>
            <td>nnnnn</td>
          </tr>
          <tr>
            <td>Kolom 1</td>
            <td>Kolom 3</td>
            <td>kolom 4</td>
          </tr>
          <tr>
            <td>Kolom 1</td>
            <td>Kolom 3</td>
            <td>kolom 4</td>
          </tr>
          <tr>
            <td>Kolom 1</td>
            <td>Kolom 3</td>
            <td>kolom 4</td>
          </tr>
          <tr>
            <td>Kolom 1</td>
            <td>Kolom 3</td>
            <td>kolom 4</td>
          </tr>
          <tr>
            <td>hups</td>
            <td>Kolom 3</td>
            <td>kolom 4</td>
          </tr>
          <tr>
            <td>Kolom 1</td>
            <td>Kolom 3</td>
            <td>kolom 4</td>
          </tr>
          <tr>
            <td>Kolom 1</td>
            <td>Kolom 3</td>
            <td>kolom 4</td>
          </tr>
          <tr>
            <td>Kolom 1</td>
            <td>Kolom 3</td>
            <td>kolom 4</td>
          </tr>
          <tr>
            <td>Kolom 1</td>
            <td>Kolom 3</td>
            <td>kolom 4</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h1 id="score-title">Scorebord</h1>

  <table class="table_2">
    <tbody>
      <tr>
        <th>Teamnaam</th>
        <td>kip</td>
      </tr>
      <tr>
        <th>Score</th>
        <td>60 minuten</td>
      </tr>
      <tr>
        <th>Tevredeheidsscore</th>
        <td>m</td>
      </tr>

    </tbody>
  </table>

  <table class="table_2">
    <tbody>
      <tr>
        <th>Teamnaam</th>
        <td>Kip</td>
      </tr>
      <tr>
        <th>Score</th>
        <td>120 minuten</td>
      </tr>
      <tr>
        <th>Tevredeheidsscore</th>
        <td>mmmmm</td>
      </tr>

    </tbody>
  </table>

  <table class="table_2">
    <tbody>
      <tr>
        <th>Teamnaam</th>
        <td>kip</td>
      </tr>
      <tr>
        <th>Score</th>
        <td>120 minuten</td>
      </tr>
      <tr>
        <th>Tevredeheidsscore</th>
        <td>mmmmm</td>
      </tr>

    </tbody>
  </table>


  <form autocomplete="off" method="post" action="create.php">
    <div class="center">
      <h1 id="score-formulier">Score formulier</h1>
      <label for="inputTeamnaam">Teamnaam<sup>*</sup></label>
      <input type="text" name="teamnaam" placeholder="teamnaam" id="inputTeamnaam" required>
      <br>
      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" placeholder="E-mail" required>
      <br>
      <label for="scoretijd">Scoretijd<sup>*</sup></label>
      <input type="text" name="scoretijd" placeholder="Scoretijd" id="scoretijd" required>
      <br>
      <label for="tevredeheidsscore">Tevredeheidsscore<sup>*</sup></label>
      <input type="text" id="tevredeheidsscore" name="tevredeheidsscore" placeholder="Tevredeheidsscore" required>
      <br>
      <button id="button_1" type="submit">Verstuur</button>
    </div>
  </form>

  <footer>
    <div class="row">
      <div class="column side">
        <ul>
          <h1><a href="../index/contact.html">Contact</a></h1>
          <li>
            <p>Telefoon: <a href="tel: 0625007290">06-25007290</a></p>
          </li>
          <li>
            <p>E-mail: <a href="mailto:333323@student.mboutrecht.nl">333323@student.mboutrecht.nl</a></p>
          </li>
          <li>
            <p>Whatsapp: <a href="tel: 0625007290">0625007290</a></p>
          </li>
          <li>
            <p>Instagram: <a href="https://www.instagram.com/escaperoom/">escaperoom</a></p>
          </li>
        </ul>
      </div>

      <div class="column mid">
        <ul>
          <h1>Locatie</h1>
          <li>
            <p>Adres: Lopikerweg 45A</a></p>
          </li>
          <li>
            <p>Postbus: 3705GE</p>
          </li>
          <li>
            <p>Provincie: Utrecht</p>
          </li>
          <li>
            <p>Plaats: Zeist</p>
          </li>
        </ul>
      </div>
    </div>
  </footer>

</body>

</html>