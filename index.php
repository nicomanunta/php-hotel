<?php
    include __DIR__."/partials/array_hotel.php";

    $filter_hotel = $hotels;

    if(isset($_GET["parking"]) && $_GET["parking"] != "Seleziona filtro parcheggio"){
        $temporaneo_hotel = [];
        $parking = $_GET["parking"];
        foreach ($hotels as $hotel){
            if ($hotel["parking"] == $parking){
                $temporaneo_hotel [] = $hotel;
                   
            }
        }
        $filter_hotel = $temporaneo_hotel;
    }
    if(isset($_GET["vote"]) && $_GET["vote"] != "Seleziona voto"){
        $temporaneo_hotel = [];
        $vote = $_GET["vote"];
        foreach ($hotels as $hotel){
            if($hotel["vote"] == $vote){
                $temporaneo_hotel [] = $hotel;
            }
        }
        $filter_hotel = $temporaneo_hotel;
        var_dump($filter_hotel);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include __DIR__."/partials/templates/header.php" ?>
        <main>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12">
                        <form action="./index.php" method="GET">
                            <div class="row">
                                <div class="col-4">
                                    <select class="form-select" name="parking" id="parking">
                                        <option selected>Seleziona filtro parcheggio</option>
                                        <option value="1">Con parcheggio</option>
                                        <option value="0">Senza parcheggio</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-select" name="vote" id="vote">
                                        <option selected>Seleziona voto</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                <button type="submit" class="btn btn-primary">Invia</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <div class="row">
                    <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>   
                                <th scope="col">Nome</th>
                                <th scope="col">Descrizione</th>
                                <th scope="col">Voto</th>
                                <th scope="col">Distanza dal centro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($filter_hotel as $hotel){ ?>  
                                <tr>
                                    <td><?php echo $hotel["name"] ?></td>
                                    <td><?php echo $hotel["description"] ?></td>
                                    <td><?php echo $hotel["vote"]." &#9734;" ?></td>
                                    <td><?php echo $hotel["distance_to_center"]."km" ?></td>
                                </tr>
                             <?php }  ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>    
        </main>
    <?php include __DIR__."/partials/templates/footer.php" ?>
</body>
</html>