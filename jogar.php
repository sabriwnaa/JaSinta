<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogar</title>
     <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&family=Inter:wght@400;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class='container'>
        <div class='header-jogar'>
            <div class='container-nivel'>
                <h2>Nivel 1</h2>
                <?php for($i=0;$i<10;$i ++){
                    echo '<img src="flor.webp">';
                }
                ?>
            </div>
            <div class='jasinta-jogar'>
                <h1>JaSinta: guie-se pelo sentir</h1>
            </div>
        </div>
        <div class='main'>
            <div class='fotos'>
                <h2>Fotos</h2>
            </div>
            <div class='container-sentimentos'>
                <div class='sentimentos'>
                   <h2> Sentimentos</h2>
                </div>
                <button>Sentir</button>
            </div>
        </div>
    </div>
    
</body>
</html>