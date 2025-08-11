<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Peças</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&family=Inter:wght@400;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='container'>
        <?php include('includes/header.php'); ?>
        <div class='main'>
            <div class='container-vertical'>
                <h1 class='titulo'>Gerenciar jogo</h1>
                <div class='peca'>
                    <div class='container-horizontal'>
                        <h1>Jogadoras</h1>
                        <a href="cadastrar-jogadora.php">+</a>
                    </div>
                    
                    <div class='container-horizontal'>
                        <?php for($i=0;$i<5;$i++){?> 
                            <h2>Jogadora X</h2>
                        <?php } ?>
                        <?php echo '<h2>+13</h2>'?>
                    </div>
                </div>
            </div>

            <div class='container-horizontal bloco'>
                <div class='container-vertical peca'>
                    <div class='container-horizontal'>
                        <h1>Fotos</h1>
                        <a href="cadastrar-foto.php">+</a>
                    </div>
                    <div class='container-horizontal'>
                        <?php for($i=0;$i<5;$i++){?> 
                            <h2>Foto X</h2>
                        <?php } ?>
                    </div>
                </div>
                <div class='container-vertical peca'>
                    <div class='container-horizontal'>
                        <h1>Sentimentos</h1>
                        <a href="cadastrar-sentimento.php">+</a>
                    </div>
                    <div class='container-vertical'>
                        <?php for($i=0;$i<5;$i++){?> 
                            <h2>sentimento X</h2>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>

    </div>
    
</body>
</html>