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

    $sql = "INSERT INTO `score` (`id`, `teamnaam`, `email`, `scoretijd`, `tevredeheidsscore`) VALUES (NULL, '$teamnaam', '$email', '$scoretijd', '$tevredeheidsscore');";

    $result = mysqli_query($conn, $sql);


    // echo $sql;

    if ($result) {
        echo "<h1>Uw gegevens zijn opgeslagen";
        header("Refresh:0; url=./score.html");
    } else{
      echo "<h1>Uw gegevens zijn niet opgeslagen, probeer het nog eens";
      header("Refresh:3.5; url=./score.php");
    }
?>