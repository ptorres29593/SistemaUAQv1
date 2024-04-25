<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB test MySQL Laravel</title>
</head>
<body>
    <div>
        <?php
            if (DB::connection()->getPdo()){
                echo "conexión exitosa a la BD, nombre de la BD es:".DB::connection()->getDatabaseName();
            }
        ?>
    </div>
    
</body>
</html>