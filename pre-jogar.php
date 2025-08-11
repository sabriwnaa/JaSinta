<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pré-jogo</title>
     <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&family=Inter:wght@400;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <div class='container'>
        <?php include('includes/header-jogo.php')?>
        <div class='main'>
            <h1>Antes de iniciar o jogo</h1>
            <form action="">
                <h2>Informe as jogadoras (em ordem)</h2>

                
                <div id="jogadoras-container">
                    <select name="jogadora[]">
        <option value="">Selecione uma jogadora</option>
        <option value="1">Ficção</option>
        <option value="2">Romance</option>
        <option value="3">Ciência</option>
    </select>
    <select name="jogadora[]">
        <option value="">Selecione uma jogadora</option>
        <option value="1">Ficção</option>
        <option value="2">Romance</option>
        <option value="3">Ciência</option>
    </select>
</div>

<button type="button" id="btn-adicionar">Adicionar jogadora</button>

<script>
document.getElementById('btn-adicionar').addEventListener('click', function() {
    // cria um novo select
    let novoSelect = document.createElement('select');
    novoSelect.name = "jogadora[]";
    novoSelect.innerHTML = `
        <option value="">Selecione uma jogadora</option>
        <option value="1">Ficção</option>
        <option value="2">Romance</option>
        <option value="3">Ciência</option>
    `;

    // adiciona no container
    document.getElementById('jogadoras-container').appendChild(novoSelect);
});
</script>




                <button>Concluído</button>
            </form>
            
        </div>
    </div>
    
</body>
</html>