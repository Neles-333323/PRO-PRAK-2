<?php 

$servername = "localhost";
   $username = "root";
   $password = "";
    $dbname = "escaperoom_excido";

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    $teamnaam = $_POST["teamnaam"];
    $email = $_POST["email"];
    $scoretijd = $_POST["scoretijd"];
    $tevredeheidsscore = $_POST["tevredeheidsscore"];

    echo $teamnaam;

    $sql = "INSERT INTO `score` (`id`, `teamnaam`, `email`, `scoretijd`, `tevredeheidsscore`) VALUES (NULL, '$teamnaam', '$email', '$scoretijd', '$tevredeheidsscore');";

    $result = mysqli_query($conn, $sql);


    // echo $sql;

    if ($result) {
        echo "<h1>Uw gegevens zijn opgeslagen</h1>";
        header("Refresh:30; url=./score.php");
    } else{
      echo "<h1>Uw gegevens zijn niet opgeslagen, probeer het nog eens</h1>";
      header("Refresh:30; url=./score.php");
    }
?>