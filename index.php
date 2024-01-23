<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <!-- primo form per voto -->
    <form>
        <label for="voto">voto</label>
        <input type="text" name="voto" id="voto">
        <input type="submit" value="Invia">
    </form>
    <!-- secondo from per parcheggio  -->
    <form>
        <label for="parcheggio">parcheggio</label>
        <select name="parcheggio" id="parcheggio">
            <option value="presente">parcheggio</option>
            <option value="false">non parcheggio</option>
        </select>
        <input type="submit" value="Invia">
    </form>
    <?php

    // array con descrizione hotel
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    // controllo dei parcheggi e valore hotel es bonnus
    if (isset($_GET['parcheggio']) || isset($_GET['voto'])) {
        $controllo = $_GET['parcheggio'];
        $name = $_GET['voto'];
        foreach ($hotels as $nome)
            if ($controllo === 'presente' && $nome['parking'] === true || $name == $nome['vote']) {
                echo "<div class='d-inline-block mx-3'>
            <h4>$nome[name]</h4>
            <p> $nome[description]</p>
            <div> voto:  $nome[vote]</div>
            <div>distanza:  $nome[distance_to_center]</div>
            </div>
        </div>";
            }
    }

    // foreach per ogni elemnto es base 
    echo '<div class="container">';
    echo '<div class="row">';
    foreach ($hotels as $nome)
        echo "<div class='col-4 my-3 '>
        <div class='bg-dark text-white'>
            <h1>
             $nome[name]
            </h1>
            <p>  $nome[description]</p>
            <div> voto:  $nome[vote]</div>
            <div>distanza:  $nome[distance_to_center]</div>
         </div>
        </div>";
    echo '</div>';
    echo '</div>';
    ?>
</body>


</html>