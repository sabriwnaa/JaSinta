<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotos</title>
     <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&family=Inter:wght@400;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='container'>
        <?php include('includes/header.php');?>
        <div class='main'>
            <div class='container-horizontal'>
                <h1>Fotos</h1>
                <div class='container-horizontal'>
                    <a href="">Categorizar</a>
                    <a href="cadastrar-foto.php">Cadastrar</a>
                    <a href="">Filtrar</a>
                </div>
            </div>
            <div class='container-pecas'>
                <?php for($i=0;$i < 10; $i ++) {  ?>
                    <div class='peca'>
                        <p>Foto <?php echo $i;?></p>
                        <a href="preferencia-foto.php" class='corner top-right'>Preferencia</a>
                        <a href="excluir-foto.php" class='corner bottom-right'>Delete</a>
                    </div>
               <?php }
                ?>

            </div>
        </div>
    </div>
    
</body>
</html>