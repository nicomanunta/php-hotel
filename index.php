<?php
    include __DIR__."/partials/array_hotel.php";

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
    <div class="container">
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
                    <?php foreach($hotels as $hotel){ ?>  
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




</body>
</html>