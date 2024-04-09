<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php
    $persons = [
        0 => [
            "name" => "Marko",
            "age" => 25,
            "aadress" => "Pärnu-Jaagupi"
        ],
        1 => [
            "name" => "Juhan",
            "age" => 55,
            "aadress" => "Euroopa"
        ],
        2 => [
            "name" => "Mari",
            "age" => 35,
            "aadress" => "Aasia"
        ]
    ];
    ?>
    <div class="container">
        <div class="row">
            <div class="col-5 mx-auto">
            <h1 class="text-center">Tabel</h1>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="text-center">
                        <th>Jrk</th>
                        <th>Nimi</th>
                        <th>Vanus</th>
                        <th>Aadress</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($persons as $key=>$val){
                        ?>
                        <tr>
                            <td class="text-end"><?php echo ($key + 1); ?>.</td>
                            <td class="text-center"><?php echo $val['name']; ?></td>
                            <td class="text-end"><?php echo $val['age'] ; ?></td>
                            <td class="text-center"><?php echo $val['aadress'] ; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

            </div>
        </div>
    </div>
    
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>