<?php

    include("./connect_db.php");

    $sql = "SELECT * FROM `score`";

    $result = mysqli_query($conn, $sql);

    $rows = "";

    while($record = mysqli_fetch_assoc($result)) {
        $rows .= "<tr>
                    <td>{$record['id']}</td>
                    <td>{$record['teamnaam']}</td>
                    <td>{$record['email']}</td>
                    <td>{$record['scoretijd']}</td>
                </tr>";
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>Crud</title>
  </head>
  <body>


<!-- <div class="container-fluid">
      <div class="row col-12">
       <h1 style="font-size:50px">KerstLijstje</h1>
      </div>
    </div> -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">teamnaam</th>
                            <th scope="col">email</th>
                            <th scope="col">scoretijd</th>
                            </tr>
                    </thead>
                    <tbody>
                        <?php echo $rows; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
  </body>
</html>