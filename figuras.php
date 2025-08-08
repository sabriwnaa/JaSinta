<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras</title>

    <style>
        

    </style>




</head>
<body>

    
   
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
                            for($i=0;$i < 4;$i++){
                            echo '<div class="listraLateral"></div>';
                            }  
                        ?> 
                    </div>
                    <div class='mainListrada'></div>
                    <div class='lateralListrada'>
                        <?php 
                            for($i=0;$i < 4;$i++){
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


</body>
</html>