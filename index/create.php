<?php 

$servername = "localhost";
   $username = "root";
   $password = "";
    $dbname = "escaperoom_excido";

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    $voornaam = $_POST["voornaam"];
    $tussenvoegsel = $_POST["tussenvoegsel"];
    $achternaam = $_POST["achternaam"];
    $email = $_POST["email"];

    $sql = "INSERT INTO `score` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `email`) VALUES (NULL, '$voornaam', '$tussenvoegsel', '$achternaam', '$email');";

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