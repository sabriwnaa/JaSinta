<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JaSinta</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&family=Inter:wght@400;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="style.css">

    <style>
 
    </style>
    <script src="script.js" defer></script>

</head>
<body>
    

    <div class='container'>
        <?php include('includes/header.php'); ?>
        
        <div class='main'>
            <div class='cartaListrada'>
                <div class='linhaListrada'>
                    <?php 
                        for($i=0;$i < 6;$i++){
                        echo '<div class="listraCimaBaixo"></div>';
                        }  
                    ?> 
                </div>
                <div class='meioListrada'>
                        
                    <div class='lateralListrada'>
                        <?php 
                            for($i=0;$i < 6;$i++){
                            echo '<div class="listraLateral"></div>';
                            }  
                        ?> 
                    </div>
                    <div class='mainListrada'></div>
                    <div class='lateralListrada'>
                        <?php 
                            for($i=0;$i < 6;$i++){
                            echo '<div class="listraLateral"></div>';
                            }  
                        ?> 
                    </div>
                </div>
                
                    
                <div class='linhaListrada'>
                    <?php 
                        for($i=0;$i < 6;$i++){
                        echo '<div class="listraCimaBaixo"></div>';
                        }  
                    ?> 
                </div>
        

        
            </div>
        </div>





    </div>

</body>
</html>